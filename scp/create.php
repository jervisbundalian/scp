<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="src/style.css" rel="stylesheet">
        <title>Create a New Item</title>
    </head>

    <body>
        <div class="create-container">
            <a href='index.php'><img src="images/logo.png" width="150px" alt="logo" class="logo-mobile"></a>

            <h1 class="header">Create a New Item</h1>

            <?php
                if($_POST)
                {
                    //include database connection
                    include 'config/database.php';

                    //take input from form and insert into database
                    try
                    {
                        //insert query (sql)
                        $query = "insert into items set item=:item, object=:object, procedures=:procedures, description=:description, reference=:reference, image=:image";

                        //prepare query for execution
                        $statement = $conn->prepare($query);

                        $item = htmlspecialchars(strip_tags($_POST['item']));
                        $object = htmlspecialchars(strip_tags($_POST['object']));
                        $procedures = htmlspecialchars(strip_tags($_POST['procedures']));
                        $description = htmlspecialchars(strip_tags($_POST['description']));
                        $reference = htmlspecialchars(strip_tags($_POST['reference']));
                        $image = $_FILES['image']['name'];
                        $tmp_dir = $_FILES['image']['tmp_name'];
                        $imageSize = $_FILES['image']['size'];
                        $upload_dir ='uploads/';
                        $image_Ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                        $valid_extensions = array('jpeg','jpg','png','gif','pdf');
                        $imageProfile = $item.".".$image_Ext;
                        move_uploaded_file($tmp_dir, $upload_dir.$imageProfile);

                        //bind the parameters
                        $statement->bindParam(':item',$item);
                        $statement->bindParam(':object',$object);
                        $statement->bindParam(':procedures',$procedures);
                        $statement->bindParam(':description',$description);
                        $statement->bindParam(':reference',$reference);
                        $statement->bindParam(':image',$image);

                        //execute the query
                        if($item == "")
                        {
                            echo"<div class='alert-danger'>Please enter the item name</div><br>";
                        }
                        else
                        {
                            if($statement->execute())
                            {
                                echo"<div class='alert-create'>Item was saved</div><br>";
                            }
                            else
                            {
                                echo"<div class='alert-danger'>Unable to save item.</div><br>";
                            }
                        }
                    }
                    catch(PDOException $exception)
                    {
                        die('ERROR: ' . $exception->getMessage());
                    }
                } 
            ?>

            <form id="usrform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">            
                <label>Item Name</label>
                <br>
                <input type="text" name="item" class="input" placeholder="Enter Item Name">
                <br>

                <label>Upload an image</label>
                <br>
                <input type="file" name="image" class="input">
                <br>

                <label>Object Class</label>
                <br>
                <input type="text" name="object" class="input" placeholder="Enter Object Class">
                <br>

                <label>Special Containment Procudure</label>
                <br>
                <textarea name="procedures" form="usrform" placeholder="Enter Special Containment Procudure"></textarea>
                <br>

                <label>Description</label>
                <br>
                <textarea name="description" form="usrform" placeholder="Enter Description"></textarea>
                <br>

                <label>Other informations</label>
                <br>
                <textarea name="reference" form="usrform" placeholder="Enter other informations"></textarea>
                <br>
                
                <input type="submit" name="submit" value="Create" class="btn-createe">
                <a href="index.php" class="btn-delete">Back</a>
        </form>
        </div>

        <footer>
            <p>Jervis Nicholle D. Bundalian (30046109) Copyright &copy; 2020</p>
        </footer>
    </body>
</html>
