<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['orderid']) && isset($_POST['customerid']) && isset($_POST['employeeid']) && isset($_POST['Date']) && isset($_POST['status']) && isset($_POST['calc_total'])){
	// write the query to check if this username and password exists in our database
	$o = $_POST['orderid'];
	$c = $_POST['customerid'];
	$e = $_POST['employeeid'];
	$d = $_POST['Date'];
	$s = $_POST['status'];
	$cal = $_POST['calc_total'];
	
	
	$sql = " INSERT INTO Order VALUES( '$o', '$c', '$e', '$d' ,'$s','$cal') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: order.html");
	}
	else{
		//echo "Insertion Failed";
		header("Location: order.html");
	}
	
}


?>