<!DOCTYPE html>
<html>
<head>
	
	<title>
		Exercise Simple CRUD
	</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<script>
	function getcity(val){
		
		$.ajax({
			type:"POST",
			url: "getcity.php",
			data: 'regid='+val, 
			success: function(data){

				$("#city-list").html(data);
			}

		})

	}
</script>

<body>

<?php require_once 'db.php';

$mysqli = new mysqli('localhost', 'root', '', 'ojt_exercise') or die ('MySQL connection failed. ' . mysqli_error($mysqli));

$result = $mysqli->query("SELECT * from profile") or die($mysqli->error);
$result1 = $mysqli->query("SELECT * from region") or die($mysqli->error);

?>

<?php if (isset($_SESSION['pop'])): ?>
	
	<div class="alert alert-<?=$_SESSION['message']?>">
	<?php echo $_SESSION['pop'];
	unset($_SESSION['pop']); 
	?>
	</div>
<?php endif ?>

<div class="col-md-12"; style="font-size: 15px">
				
        		<h3 style="font-size: 50px; text-align: center">EXERCISE: SIMPLE CRUD</h3>
        <div>

<div class="justify-content-center" style="float: left; padding: 30px; margin-left: 100px">
	<div style="color: white; background-color: #006400; text-align: center">
	<h1>Create Profile</h1>
</div>

<div class="container">
<div>
	<form action="db.php" method="POST">
		
			<input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="form-group" style="font-weight: bold">
			<label>First Name: </label>
			<input type="textbox" name="first" class="form-control" value="<?php echo $first; ?>">
		</div>
		<div class="form-group" style="font-weight: bold">
			<label>Middle Name: </label>
			<input type="textbox" name="middle" class="form-control" value="<?php echo $middle; ?>">
		</div>
		<div class="form-group" style="font-weight: bold">
			<label>Last Name: </label>
			<input type="textbox" name="last" class="form-control" value="<?php echo $last; ?>">
		</div>
		<div class="form-group" style="font-weight: bold">
			<label>Birthday: </label>
			<input type="date" name="bday" class="form-control" value="<?php echo $bd; ?>">
		</div>
		<div class="form-group" style="font-weight: bold">
			<label>Address 1: </label>
			<input type="textbox" name="add1" class="form-control" value="<?php echo $ad1; ?>">
		</div>
		<div class="form-group" style="font-weight: bold">
			<label>Address 2: </label>
			<input type="textbox" name="add2" class="form-control" value="<?php echo $ad2; ?>">
		</div>

		<div class="form-group" style="font-weight: bold">
			<label>Region:</label>
			<select name="region" id="region-list" class="form-control" onchange="getcity(this.value);" >
				<option value="<?php if (!empty($rgn)) {echo $rgn;} ?>"><?php if (!empty($rgn)) {echo $rgn;} ?></option>
				<?php while ($row = $result1-> fetch_assoc()): ?>
				<option value="<?php echo $row['ID'] ?> "><?php echo $row['Region'] ?>
				</option>
				<?php endwhile; ?>
			</select>
		</div>
		
		<div class="form-group" style="font-weight: bold">
			<label>City:</label>
			<select name="city" id="city-list" class="form-control" >
				<option value="<?php if (!empty($cty)) {echo $cty;} ?>"><?php if (!empty($cty)) {echo $cty;} ?></option>
			</select>
			
		</div>

		<div class="form-group" style="text-align: center">
			<?php if ($save==true): ?>
				<button type="submit" name="update" class="btn btn-warning" style="background-color: #006400; color: white" >Update</button> 
			<?php else: ?>
				<button type="submit" name="save" class="btn btn-primary" style="background-color: #006400">Save</button> 
			<?php endif ?>
			
		</div>
		
		
	</form>
</div>	
</div>	
</div>	

<div class="container">
<div class="row justify-content-left" style="margin: 0px auto; padding: 30px;">
	     
	<table class="table" style="border-style: solid">
		<thead>
			<tr class="table" style="border-style: solid; color: white; background-color: #006400;">
				<th>ID</th>
				<th>FIRSTNAME</th>
				<th>MIDDLENAME</th>
				<th>LASTNAME</th>
				<th>BIRTHDAY</th>
				<th>AGE</th>
				<th>REGION</th>
				<th>CITY</th>
				<th>ADDRESS 1</th>
				<th>ADDRESS 2</th>
				
				<th>EDIT/DELETE</th>
				<th></th>
				<th></th>
				<th></th>


			</tr>
		</thead>

		<?php while ($row = $result-> fetch_assoc()): ?>
			<tr>
				<td><?php echo $row['Profile_ID']; ?></td>
			<td><?php echo $row['Firstname']; ?></td>
			<td><?php echo $row['Middlename']; ?></td>
			<td><?php echo $row['Lastname']; ?></td>
			<td><?php echo $row['Birthday']; ?></td>
			<td><?php echo $row['Age']; ?></td>
			<td><?php echo $row['Region']; ?></td>
			<td><?php echo $row['City']; ?></td>
			<td><?php echo $row['Address1']; ?></td>
			<td><?php echo $row['Address2']; ?></td>
			<td class="button" style="position: absolute;"> <a href="index.php?view= <?php echo $row['Profile_ID'];?>" class="btn btn-info" style="background-color: green;">Edit</a>

			 <a onclick="return confirm('Delete record?')" href="db.php?delete= <?php echo $row['Profile_ID'];?>" class="btn btn-danger">Delete</a> </td>
			</tr>
		<?php endwhile; ?>



	</table>
</div>
</div>		
</div>

</body>
</html>