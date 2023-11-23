<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['Productid']) && isset($_POST['Price']) && isset($_POST['Supplierid']) && isset($_POST['Name']) && isset($_POST['Quantity'])){
	// write the query to check if this username and password exists in our database
	$pro = $_POST['Productid'];
	$pri = $_POST['Price'];
	$s = $_POST['Supplierid'];
	$n = $_POST['Name'];
	$q = $_POST['Quantity'];
	
	
	$sql = " INSERT INTO Product VALUES( '$pro', '$pri', '$s', '$n' ,'$q') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: Product.html");
	}
	else{
		//echo "Insertion Failed";
		header("Location: Product.html");
	}
	
}


?>