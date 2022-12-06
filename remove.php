<?php
    $db = mysqli_connect("localhost", "root", "", "dbsoummo");
    $sql = "TRUNCATE TABLE dt";
    mysqli_query($db, $sql);
    header('location:Database.php');
?>