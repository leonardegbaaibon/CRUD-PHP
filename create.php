<?php
    if (isset($_POST['submit'])){
        $name = mysqli_real_escape_string($_POST['name']);
        $is_completed = $_POST['is_completed'];
        echo $is_completed;
        require_once('dbconnection.php');
        $query = "INSERT INTO todo (name, is_completed)".
                  "VALUES ('$name','$is_completed')";
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        header('Location: index.php', 201);
    } else {
?>
         <h3>Add a todo</h3>
        <p><a href="./index.php">&lt;&lt;Back to home</a></p>
        <form action="" method="post">
            <div>
                <label for="name">Todo Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="completed">Completed</label>
                Yes: <input type="radio" name="is_completed" value="1">
                No: <input type="radio" name="is_completed" value="0">
            </div>
            <input type="submit" value="Create Todo" name="submit">
        </form>
    <?php
    }
?>