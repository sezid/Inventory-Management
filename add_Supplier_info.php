<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset(isset($_POST['Supplierid']) && isset($_POST['Name'])){
	// write the query to check if this username and password exists in our database
	$s = $_POST['Supplierid'];
	$n = $_POST['Name'];
	
	
	$sql = " INSERT INTO Supplier VALUES('$s', '$n') ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Inseted Successfully";
		header("Location: Supplier.html");
	}
	else{
		//echo "Insertion Failed";
		header("Location: Supplier.html");
	}
	
}


?>