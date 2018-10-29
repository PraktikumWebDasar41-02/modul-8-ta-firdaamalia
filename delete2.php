<?php
    require_once("koneksina.php");

    $username    = $_GET['username'];
    $delete = "DELETE FROM user WHERE username='$username'"; 

    if (mysqli_query($conn, $delete)) {
        header("location: profilena.php");
    }else {
        echo "Error: " . $delete . "<br?" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
