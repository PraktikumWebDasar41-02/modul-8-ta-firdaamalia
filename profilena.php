
	<h1>---Lihat Profile---</h1>
 <table border="5" width="50%" style="text-align: center;">
 	<tr>
 		<th>Username</th>
 		<th>Password</th>
 		<th colspan="2"> Action</th>
 	</tr>
	
<?php
 	include("koneksina.php");
 	$sql = "SELECT * FROM user";
 	$result = mysqli_query($conn, $sql);
 		
 		if (mysqli_num_rows($result)>0) {
 			while ($row = mysqli_fetch_assoc($result)) {
 				?>

 				<tr>
 				<td><?php echo $row['username']?></td>
 				<td><?php echo $row['password']?></td>
 				<td><a href="edit2.php?nim=<?php echo $row['username']; ?>"> Edit</a></td>
 				<td><a href="delete2.php?nim=<?php echo $row['username']; ?>"> Hapus</a></td>
 				</tr>
 				
 				<?php
 			}
 		}else{
 			echo "0 results";
 		}
 		mysqli_close($conn);
 	?>
 </table>


<br>
 <a href="dashboardna.php">Home</a>



 	












