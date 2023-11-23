<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['Orderid'])){
	// write the query to check if this username and password exists in our database
	$o = $_POST['Oderid'];
	
	
	
	$sql = " delete from OrderInfo where OrderId='$o' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//echo "Deletation Successfully";
		header("Location: OrderInfo.html");
	}
	else{
		//echo "Deletation Failed";
		header("Location: OrderInfo.html");
	}
	
}


?>