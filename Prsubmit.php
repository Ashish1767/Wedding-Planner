<?php
	
	$username=$_REQUEST["name"];
	$mail=$_REQUEST["email"];
	$phone=$_REQUEST["phone"];
	$address=$_REQUEST["address"];
	$work=$_REQUEST["work"];
	
	$conn=mysqli_connect("localhost","root","") or die("Couldn't connect to server");
	
	$query="CREATE DATABASE IF NOT EXISTS Practical";
	
	$result=mysqli_query($conn , $query) or die("Query failed : " . mysql_error ($conn));
	
	$db=mysqli_select_db($conn,"Practical") or die("Couldn't connect to database");
	
	$query="CREATE TABLE IF NOT EXISTS Alumni_Details (name VARCHAR(20) , mail VARCHAR(50) ,  phone VARCHAR(20) , address VARCHAR(110) , place VARCHAR(110))";
	
	$result=mysqli_query($conn , $query) or die("Query failed : " . mysql_error ($conn));
	
	$query="INSERT INTO Alumni_Details (name , mail , phone , address , place) VALUES ('$username','$mail','$phone','$address' , '$work')";
	
	$result=mysqli_query($conn , $query) or die("Query failed : " . mysql_error ($conn));
		
		echo "<script>alert('Insertion was successfull!');</script>";
		mysqli_close($conn);
?>