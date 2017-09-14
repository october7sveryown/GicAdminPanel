<?php
 session_start();
$conn=mysqli_connect("localhost","root","","GIC");
if(isset($_POST['username'])&&isset($_POST['password']))
{
$username = $_POST['username'];
$password = $_POST['password'];
//echo $password_hash;
 
if(!empty($username)&&!empty($password))
{
$query = mysqli_query($conn,"SELECT username,password FROM `GIC`.`admin_details` WHERE username ='".$username."' AND password ='".$password."'") or die(mysqli_connect_error()); 
 
$data = mysqli_fetch_array($query);
 
$test=$data['password'];
 
$query_run=$query;
$query_num_rows = mysqli_num_rows($query_run);
if($query_num_rows==0)
{
echo "<script> alert('INVALID Username/Password Combination.Try Again');document.location='signin.php';</script>";
}
else if($query_num_rows==1)
{
	$_SESSION['username'] = $username;
	$_SESSION['msg']="Welcome! ".$username;
	
 echo "<script> alert('Successfully Logged-In. Thank You');document.location='index.php';</script>";
}
{
}
 
}
else
{
echo 'You must supply correct username and password';
}
 
}
 
