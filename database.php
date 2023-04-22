<?php
header("Location: index.php");
?>

 <?php
	if(isset($_POST['submit'])){ ;
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$number = $_POST['number'];
	// Database connection
	$conn = new mysqli('localhost', 'root', '', 'login');
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);

		$_SESSION['username'] = $number;
		header('location:index.php');
	} else {
		$stmt = $conn->prepare("insert into registration(fname,  lname, email, password, cpassword, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $fname,   $lname, $email, $password, $cpassword, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo '<script> alert("Registration successfully...")</script>';
		$stmt->close();
		$conn->close();		
	}
	}
	?>
