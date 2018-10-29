

 	<h1> ---Regristrasi Baru---</h1>

 <form method="post">
 	<table>
 	<tr>
 		<td>Username</td>
 		<td>:</td>
 		<td><input type="text" name="username"> </td>
 	</tr>
 	<tr>
 		<td>Password</td>
 		<td>:</td>
 		<td><input type="password" name="password"></td>
 	</tr>
 	<tr>
 		<td>Re-Password</td>
 		<td>:</td>
 		<td><input type="password" name="password2"></td>
 	</tr>
 	<tr>
 		<td><input texalign=center type="submit" name="kirim" value="send"></td>
 	</tr>
 </form>
</table>


 
 <?php
include ('koneksina.php');
 if (isset($_POST['kirim'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	if ($_POST['password2']==$_POST['password'] ) {
 	
	     $sql = "INSERT INTO user (username, password)
		            VALUES ('$username', '$password')"; 

		    if (mysqli_query($conn, $sql)) {
		        header("Location: indexnaa.php");
		    }else {
		        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
		    }
	}else{
		echo "<script>alert('Password no-valid');history.go(-1)</script>";
	}
	    mysqli_close($conn);
 }

 ?>

