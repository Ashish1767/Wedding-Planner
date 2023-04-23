<?php
 include 'connection.php';
 $showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $username=$_POST["username"];
   $useremail=$_POST["useremail"];
   $password=$_POST["password"];      }
   $existSql="SELECT * FROM `signup` WHERE username='$username'";
    $existSql1="SELECT * FROM `signup` WHERE useremail='$useremail'";
   $result=mysqli_query($conn,$existSql);
   $numExistRows=mysqli_num_rows($result);
   $result1=mysqli_query($conn,$existSql1);
   $numExistRows1=mysqli_num_rows($result1);
   
   if($numExistRows>0)
   {
	   echo "<script> alert(' username already exists!!.Try a different username or if registered before then login directly'); 
		window.location.href='login and registration page.html'; </script>";
   }
   if($numExistRows1>0)
   {
	   echo "<script> alert(' useremail already exists!!.Try logging in or register with other mail.'); 
		window.location.href='login and registration page.html'; </script>";
   }
   
else
  {
	$sql= "INSERT INTO `signup` (`username`, `useremail`, `password`, `date`) VALUES ('$username', '$useremail', '$password', current_timestamp())";
	$result=mysqli_query($conn,$sql);
	if($result){
		$showAlert=true;
		echo "<script> alert(' you have registered successfully. Now you can log in.'); 
		window.location.href='login and registration page.html'; </script>";
	          }
   }
  
?>


