<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="src/style.css" rel="stylesheet">
        <title>SCP</title>
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
        <img src="images/logo.png" width="200px" alt="logo" class="logo">

        <div class="main-create">
            <a href='create.php' class='btn-create'>CREATE NEW ITEM</a>
        </div>

        <div class="container">
            <?php
                //database connection
                include 'config/database.php';

                //select all records from the table
                $query = "select id, item, object from items";
                $statement = $conn->prepare($query);
                $statement->execute();
                
                //return the number of rows we require from the database
                $rows = $statement->rowCount();

                if($rows > 0)
                {
                    //run a loop to retrieve each database record and then display in bootstrap grid
                    while($record = $statement->fetch(PDO::FETCH_ASSOC))
                    {
                        extract($record);
                        
                        echo "
                            <div class='box'>
                                <img src='images/icon.png' alt='icon' class='icon'>
                                <h3>{$item}</h3>
                                <p>Object Class: {$object}</p>
                                <div class='btn'>
                                    <a href='read.php?id={$id}' class='btn-read'>View</a>
                                    <a href='update.php?id={$id}' class='btn-update'>Edit</a>
                                    <a href='#' onclick='delete_record({$id});' class='btn-delete'>Delete</a>
                                </div>
                            </div>
                        ";
                    }
                }
                else
                {
                    echo "<div class'alert-danger'>No records found</div>";
                }
            ?>
        </div>

        <footer>
            <p>Jervis Nicholle D. Bundalian (30046109) Copyright &copy; 2020</p>
        </footer>
    </body>
</html>