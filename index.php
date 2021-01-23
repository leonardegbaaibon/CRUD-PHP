<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - PHP App</title>
</head>
<body>
    <header>
        <h3>Welcome to My First PHP Application</h3>
    </header>
    <button><a href="./create.php">Create a new todo</a></button>
    
    <main>
        <h2>View Your Todo</h2>
        <?php
            require_once('dbconnection.php');   
            $query = "SELECT * FROM todo";
            $data = mysqli_query($db, $query);
            while ($row = mysqli_fetch_array($data)) {
        ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['is_completed'] ?></td>
                    <td><a href="./edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                    <td><a href="./delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                </tr> <br>
        <?php
            } 
        ?>
    </main>
</body>
</html>