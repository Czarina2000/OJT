<?php 
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'ojt_exercise') or die ('MySQL connection failed. ' . mysqli_error($mysqli));


$id = 0;
$save = false;
$id = $first = $middle = $last = $ad1 = $ad2 = $bd = $rgn = $cty ="";



if (isset($_POST['save'])) {
	# code...
	$today = date("Y-m-d");
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$last = $_POST['last'];
	$reg1 = $_POST['region'];
	$city = $_POST['city'];

	$result = $mysqli->query("SELECT * from region WHERE ID ='$reg1'") or die($mysqli->error);
	if (count(array($result))==1) {
		# code...
		$row = $result->fetch_array();
		$reg1 =$row['Region'];
		

	}


	$bday = date('Y-m-d', strtotime($_POST['bday']));
	$aget = date_diff(date_create($_POST['bday']), date_create($today));
	$age = $aget->format('%y');
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];


	
	$mysqli->query("INSERT INTO profile (Firstname, Middlename, Lastname, Address1, Address2, Birthday, Age, Region, City) VALUES ('$first', '$middle', '$last', '$add1', '$add2', '$bday', $age, '$reg1', '$city')") or die($mysqli->error);
	$_SESSION['pop'] = "Profile Successfully Added!";
	$_SESSION['message'] = "success";

	header("location: index.php");
}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$last = $_POST['last'];
	$region = $_POST['region'];
	$city = $_POST['city'];
	$add1 = $_POST['add1'];
	$add2 = $_POST['add2'];
	$today = date("Y-m-d");
	$bday = date('Y-m-d', strtotime($_POST['bday']));
	$aget = date_diff(date_create($_POST['bday']), date_create($today));
	$age = $aget->format('%y');
	$verify = is_numeric($region);
	if ($verify==1) {
		$result1 = $mysqli->query("SELECT * from region WHERE ID ='$region'") or die($mysqli->error);
		if (count(array($result1))==1) {
		
			$row = $result1->fetch_array();
			$region =$row['Region'];
			

		}
	}
	
	$mysqli->query("UPDATE profile SET Firstname = '$first', Middlename ='$middle', Lastname = '$last', Address1 = '$add1', Address2 = '$add2', Birthday = '$bday', Age = $age, Region = '$region', City = '$city'  WHERE Profile_ID = '$id'") or die($mysqli->error);
	$_SESSION['pop'] = "Profile Successfully Updated!";
	$_SESSION['message'] = "warning";

	header("location: index.php");
}

//
if (isset($_GET['view'])) {
	# code...
	$id = $_GET['view'];
	$save = true;
	$result = $mysqli->query("SELECT * from profile WHERE Profile_ID ='$id'") or die($mysqli->error);
	if (count(array($result))==1) {
		# code...
		$row = $result->fetch_array();
		$id =$row['Profile_ID'];
		$first = $row['Firstname'];
		$middle = $row['Middlename'];
		$last = $row['Lastname'];
		$bd = $row['Birthday'];
		$ad1 = $row['Address1'];
		$ad2 = $row['Address2'];
		$rgn = $row['Region'];
		$cty = $row['City'];
		

	}
}

 //Deletion of Records
if(isset($_GET['delete'])) {

	$id = $_GET['delete'];
	$mysqli->query("DELETE from profile WHERE Profile_ID='$id'") or die($mysqli->error);
	$_SESSION['pop'] = "Profile Successfully Deleted!";
	$_SESSION['message'] = "danger";
	header("location: index.php");
}
?>
