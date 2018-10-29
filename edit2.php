<?php 
include ('koneksina.php');
	$username    = $_GET['username'];
    $edit   = "SELECT * FROM datadiri WHERE username = '$username'";
    $sql    = mysqli_query($conn,$edit);
   
   
 ?>

 <center>
 <h1>---Edit Data User---</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" ></td>
            </tr>
            
            
                <td colspan="3"><input type="submit" value="kirim"></td>
            </tr>
        </table>
    </form>
</center>

    <?php
    if (isset($_POST['username'])) {
        $username       = $_POST['username'];
		$password       = $_POST['password'];
		

        $sql = "UPDATE user SET password='$password'  WHERE username='$username'";

        if (mysqli_query($conn, $sql)) {
                header("location: profilena.php");
        }else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }

 ?>