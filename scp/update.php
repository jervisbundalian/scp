<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="src/style.css" rel="stylesheet">
        <title>Update an Item</title>
    </head>

    <body>
        <div class="create-container">
            <a href='index.php'><img src="images/logo.png" width="150px" alt="logo" class="logo-mobile"></a>

            <h1 class="header">Update an Item</h1>
            
            <?php
                //first check if an id value was sent to this page via the get method (?id=) usually from a link
                $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record Id not found');

                //then connect to the database
                include 'config/database.php';

                //get the cuurent record from the database based on the id get value
                try
                {
                    $query = "select id, item, object, procedures, description, reference, image from items where id = ? limit 0,1";
                    $read = $conn->prepare($query);

                    //this is to bind our ? to id
                    $read->bindParam(1,$id);

                    $read->execute();

                    //store retrieved record into associate array
                    $row = $read->fetch(PDO::FETCH_ASSOC);

                    //individual values from the record
                    $item = $row['item'] ?? 'default value';
                    $object = $row['object'] ?? 'default value';
                    $procedures = $row['procedures'] ?? 'default value';
                    $description = $row['description'] ?? 'default value';
                    $reference = $row['reference'] ?? 'default value';
                    $image = $row['image'] ?? 'default value';

                    //first check if the form below has been submitted
                    if($_POST)
                    {
                        try
                        {
                            $query = "update items set item=:item, object=:object, procedures=:procedures, description=:description, reference=:reference, image=:image where id=:id";
                    
                            // prepare the query
                            $update = $conn->prepare($query);

                            // save the post values from the form
                            $id = htmlspecialchars(strip_tags($_POST['id']));
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
                            $update->bindParam(':item', $item);
                            $update->bindParam(':object', $object);
                            $update->bindParam(':procedures', $procedures);
                            $update->bindParam(':description', $description);
                            $update->bindParam(':reference', $reference);
                            $update->bindParam(':id', $id);

                            if($image == "")
                            {
                                $update->bindParam(':image', $item);
                            }
                            else
                            {
                                $update->bindParam(':image', $image);
                            }
                            
                            
                            //execute the query
                            if($update->execute())
                            {
                                echo "<div class='alert-update'>Congratulations! $item was updated</div>";
                            }
                            else
                            {
                                echo "<div class='alert-danger'>Unable to update item. Please try again</div>";
                            }
                        }
                        catch(PDOException $exception)
                        {
                            die('ERROR: ' . $exception->getMessage());
                        }
                    }
                    else
                    {
                        echo "<div class='alert-update'>$item is ready to be updated</div>";
                    }

                }
                catch(PDOException $exception)
                {
                    die('ERROR: ' . $exception->getMessage());
                }
            ?>

            <form id="usrform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?id={$id}'); ?>" method="post" enctype="multipart/form-data">
                <div class="idd">
                <label>Record ID: <?php echo htmlspecialchars($id, ENT_QUOTES); ?> </label>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id, ENT_QUOTES); ?>">
                </div>
                <br>

                <label>Item Name</label>
                <br>
                <input type="text" name="item" value="<?php echo htmlspecialchars($item, ENT_QUOTES); ?>" class="input">
                <br>

                <?php
                    if($image == "")
                    {
                        echo "
                        <label>Image</label>
                        <br>
                        <img src='uploads/no-image.jpg' alt='image' width='300px' class='image-update'>
                        <br>";
                    }
                    else
                    {
                        echo "
                        <label>Image</label>
                        <br>
                        <img src='uploads/$item.jpg' alt='image' class='image-update'>
                        <br>";
                    }
                ?>

                <input type="file" name="image" class="input">
                <br>

                <label>Object Class</label>
                <br>
                <input type="text" name="object" value="<?php echo htmlspecialchars($object, ENT_QUOTES); ?>" class="input">
                <br>

                <label>Special Containment Procudure</label>
                <br>
                <textarea name="procedures" class="form-control" form="usrform">
                <?php echo htmlspecialchars($procedures, ENT_QUOTES); ?>
                </textarea>
                <br>

                <label>Description</label>
                <br>
                <textarea name="description" class="form-control" form="usrform">
                <?php echo htmlspecialchars($description, ENT_QUOTES); ?>
                </textarea>
                <br>

                <label>Other informations</label>
                <br>
                <textarea name="reference" class="form-control" form="usrform">
                <?php echo htmlspecialchars($reference, ENT_QUOTES); ?>
                </textarea>
                <br>

                <input type="submit" value="Update" name="update" class="btn-update">
                <a href="index.php" class="btn-delete">Back</a>
            </form>
        </div>

        <footer>
            <p>Jervis Nicholle D. Bundalian (30046109) Copyright &copy; 2020</p>
        </footer>
    </body>
</html>
