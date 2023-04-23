<?php
 include 'connection.php';
 $login=false;
 $showError=false; 
  if($_SERVER["REQUEST_METHOD"]=="POST"){
   $username=$_POST["username"];
   $password=$_POST["password"];       
	$sql= "Select * from signup where username='$username' AND password='$password' ";
	$result = mysqli_query($conn,$sql);
	$num = mysqli_num_rows($result);
	
	if($num==1){
		$login=true;
		session_start();
		$_SESSION['loggedin']= true;
		$_SESSION['username']=$username;
     	echo "<script> alert(' welcome you have logged in successfully'); 
		window.location.href='Magical_Heartz.html'; </script>";
	          }
    else{
		echo "<script> alert('  no record found!!! You have to register first'); 
            window.location.href='login and registration page.html'; </script>";
        }
		
		
  }                                
?>

