<?php
    include("db.php");
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        echo "Is present id";
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query failed !");
        }

        $_SESSION['message'] = 'Item deleted successfuly';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
?>