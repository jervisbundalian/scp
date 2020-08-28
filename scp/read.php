<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="src/style.css" rel="stylesheet">
        <title>Read Item</title>
    </head>

    <?php
        $delete = isset($_GET['action']) ? $_GET['action'] : "";

        //directed from delete.php
        if ($delete == 'deleted')
        {
            echo "<br><div class='alert-read'>Record was deleted</div>";
        }
    ?>
    <script>
        function delete_record(id)
        {
            var answer = confirm('Ok to delete this item?');
            if(answer)
            {
                window.location = 'delete.php?id=' + id;
            }
        }
    </script>

    <body>
        <div class="read-container">
            <?php
                //first check if an id value was sent to this page via the get method (?=) usually from a link
                if(isset($_GET['id']))
                {
                    //connect to the database
                    include 'config/database.php';
                    $id = $_GET['id'];

                    //get the current record from the database based on the id get value
                    try
                    {
                        $query = "select id, item, object, procedures, description, reference, image from items where id = ? limit 0,1";
                        $statement = $conn->prepare($query);

                        //this is to bind our ? to id
                        $statement->bindParam(1,$id);

                        $statement->execute();

                        //store retrieved record into associate array
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        extract($row);

                        //individual values from the record
                        $item = $row['item'];
                        $object = $row['object'];
                        $procedures = $row['procedures'];
                        $description = $row['description'];
                        $reference = $row['reference'];
                        $image = $row['image'];

                    }
                    catch(PDOException $exception)
                    {
                        die('ERROR: ' . $exception->getMessage());
                    }
                }
                else
                {
                    die('ERROR: Record Id not found');
                }
            ?>

            <h4 class="sub-header">Item Name</h4>
            <p class="main-content"><?php echo htmlspecialchars($item, ENT_QUOTES); ?></p>
            <br>

            <?php
                if($image == "")
                {
                    echo "<img src='uploads/no-image.jpg' alt='image' width='300px' class='image'>";
                }
                else
                {
                    echo "<img src='uploads/$item.jpg' alt='image' class='image'>";
                }
            ?>
            <br><br>

            <h4 class="sub-header">Object Class</h4>
            <p class="main-content"><?php echo htmlspecialchars($object, ENT_QUOTES); ?></p>
            <br>

            <h4 class="sub-header">Special Containment Procedures</h4>
            <p class="content"><?php echo htmlspecialchars($procedures, ENT_QUOTES); ?></p>
            <br>

            <h4 class="sub-header">Description</h4>
            <p class="content"><?php echo htmlspecialchars($description, ENT_QUOTES); ?></p>
            <br>

            <h4 class="sub-header">Other informations</h4>
            <p class="content"><?php echo htmlspecialchars($reference, ENT_QUOTES); ?></p>
            <br>
        </div>

        <div class="read-btn">
                <a href='index.php' class='btn-read'>Home</a>
                <a href='update.php?id=<?php echo htmlspecialchars($id, ENT_QUOTES); ?>' class='btn-update'>Edit</a>
                <a href='#' onclick='delete_record(<?php echo htmlspecialchars($id, ENT_QUOTES); ?>);' class='btn-delete'>Delete</a>
            </div>
    
        <footer>
            <p>Jervis Nicholle D. Bundalian (30046109) Copyright &copy; 2020</p>
        </footer>
    </body>
</html>