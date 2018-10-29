<?php
    require_once("koneksina.php");

    $nim     = $_GET['nim'];
    $delete = "DELETE FROM datadiri WHERE nim='$nim'"; 

    if (mysqli_query($conn, $delete)) {
        header("location: dashboardna.php");
    }else {
        echo "Error: " . $delete . "<br?" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>

