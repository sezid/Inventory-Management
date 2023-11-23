<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['name']) && isset($_POST['customerid']) && isset($_POST['employeeid']) && isset($_POST['address']) && isset($_POST['score']) && isset($_POST['email']) && isset($_POST['phone'])){
	// write the query to check if this username and password exists in our database
	$c = $_POST['customerid'];
	$n = $_POST['name'];
	$e = $_POST['email'];
	$s = $_POST['score'];
	$p = $_POST['phone'];
	$a = $_POST['address'];
	$em = $_POST['employeeid'];
	
	
	$sql = " INSERT INTO Customer VALUES( '$c', '$n', '$e', '$p' ,'$s','$a','$em') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: customer.html");
	}
	else{
		//echo "Insertion Failed";
		header("Location: customer.html");
	}
	
}


?>