<?php
    if (isset($_GET['id'])) {
        require_once('dbconnection.php');
        $query = "SELECT * FROM todo WHERE id=". $_GET['id'];
        $result = mysqli_query($db, $query);
        $id=$_GET['id'];
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <form action="" method="post">
                <div>
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $row['name']; ?>" name="name">
                </div>
                <div>
                    <label for="completed">Completed</label>
                    <?php
                        if ($row['is_completed'] == 1) {
                    ?>
                            Yes: <input type="radio" name="is_completed" value="1" checked>
                            No: <input type="radio" name="is_completed" value="0">   
                    <?php
                        }else {
                    ?>
                            Yes: <input type="radio" name="is_completed" value="1">
                            No: <input type="radio" name="is_completed" value="0" checked>
                     <?php
                        }
                    ?>
                </div>
                <input type="submit" value="Edit Todo" name="submit">
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $name = mysqli_real_escape_string($_POST['name']);
                $is_completed = $_POST['is_completed'];
                $query = "UPDATE todo  SET name='$name', is_completed='$is_completed' WHERE id=".$_GET['id'];
                $result = mysqli_query($db, $query);
                header('Location: index.php');
            }
        }

    }
    // header('Location: index.php', 201)
?>