<?php
    if (isset($_GET['id'])){
        require_once('dbconnection.php');
        $query = "DELETE FROM todo WHERE id=". $_GET['id'];
        $result = mysqli_query($db, $query);
    }
    header('Location: index.php', 201)
?>