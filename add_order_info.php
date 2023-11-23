<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['OrderInfoid']) && isset($_POST['Quantity']) && isset($_POST['Price']) && isset($_POST['Productid']) && isset($_POST['Orderid'])){
	// write the query to check if this username and password exists in our database
	$oi = $_POST['OrderInfoid'];
	$q = $_POST['Quantity'];
	$pri = $_POST['Price'];
	$pro = $_POST['Productid'];
	$o = $_POST['Orderid'];
	
	
	$sql = " INSERT INTO OrderInfo VALUES( '$oi', '$q', '$pri', '$pro' ,'$o') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: OrderInfo.html");
	}
	else{
		//echo "Insertion Failed";
		header("Location: OrderInfo.html");
	}
	
}


?>