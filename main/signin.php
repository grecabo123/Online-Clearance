<?php  

	require 'connector/connect.php';

	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$mname = mysqli_real_escape_string($conn,$_POST['mname']);
	$age = mysqli_real_escape_string($conn,$_POST['age']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	$birthdate = mysqli_real_escape_string($conn,$_POST['birthdate']);
	$place_birth = mysqli_real_escape_string($conn,$_POST['place_birth']);
	$contact = mysqli_real_escape_string($conn,$_POST['contact']);


	$citizen = mysqli_real_escape_string($conn,$_POST['citizenship']);
	$cstatus = mysqli_real_escape_string($conn,$_POST['cstatus']);
	$spouse = mysqli_real_escape_string($conn,$_POST['spouse']);
	$religion = mysqli_real_escape_string($conn,$_POST['religion']);
	$home_address = mysqli_real_escape_string($conn,$_POST['home_address']);
	$father_name = mysqli_real_escape_string($conn,$_POST['father_name']);
	$mother_name = mysqli_real_escape_string($conn,$_POST['mother_name']);
	$parent_address = mysqli_real_escape_string($conn,$_POST['parent_address']);
	$eschool = mysqli_real_escape_string($conn,$_POST['eschool']);
	$eyear = mysqli_real_escape_string($conn,$_POST['eyear']);
	$hschool = mysqli_real_escape_string($conn,$_POST['hschool']);
	$hyear = mysqli_real_escape_string($conn,$_POST['hyear']);
	$tgrad = mysqli_real_escape_string($conn,$_POST['tgrad']);
	$tyear = mysqli_real_escape_string($conn,$_POST['tyear']);
	$pgrad = mysqli_real_escape_string($conn,$_POST['pgrad']);
	$pyear = mysqli_real_escape_string($conn,$_POST['pyear']);



	if (isset($_POST['Register'])) {
		if (empty($mname) || empty($age) || empty($gender) || empty($birthdate) || empty($place_birth) || empty($contact)) {
			header("location: form?empty=failed");
		}
		else{
			$hash = "";
			 $sql = "INSERT INTO profile (first_name,middle_name,last_name,age,gender,Birthdate,Birthplace,Email,contact,password) VALUES ('$fname','$mname','$lname',$age,'$gender','$birthdate','$place_birth','$email',$contact,'$hash')";
			 if (mysqli_query($conn,$sql) === TRUE) {
			 		$last_key = mysqli_insert_id($conn);
			 }
			 else {
			 	header("location: form?failed");
			 }
		}
	}
	else {
		header("location: form?error");
	}


?>

$_SESSION['user_email'] = $email;
header("location: user");
exit();