<?php
    include 'config/database.php';

    try
    {
        $id = isset($_GET['id']) ? $_GET['id'] : die('Record not found');

        //delete query
        $query = "delete from items where items.id = ?";
        $statement = $conn->prepare($query);
        $statement->bindParam(1,$id);
    }
    catch(PDOException $error)
    {
        die('ERROR: ' . $error->getMessage());
    }

    if($statement->execute())
    {
        // redirect back to the index page with delete get value
        header('Location: index.php?action=deleted');
    }
    else
    {
        die('Unable to delete record');
    }
?>