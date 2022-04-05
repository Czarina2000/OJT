
<html>

<?php 
	$mysqli = new mysqli('localhost', 'root', '', 'ojt_exercise') or die ('MySQL connection failed. ' . mysqli_error($mysqli));
	$regid = $_POST['regid'];
	$result = $mysqli->query("SELECT * from city WHERE Reg_ID = $regid") or die($mysqli->error);
 ?>
<option value="">Select</option>
<?php  while ($row = $result->fetch_assoc()): ?>

	<option value="<?php echo $row['City']?>"><?php echo $row['City']?>
	
	</option>

<?php endwhile; ?>
</html>