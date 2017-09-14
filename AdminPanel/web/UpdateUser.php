<?php

 require_once 'PwdHash.php';        
     $conn=mysql_connect("localhost","root","");
	if(!$conn)
	{
		die('Could not connect'.mysql_error());
	}
	$uname=$_POST['username'];
	$pword=$_POST['password'];
	
    $pwd_hash = PwdHash::hash($pword);
    mysql_select_db("diotr",$conn);
	$query="UPDATE `diotr`.`users` SET pwd_hash='$pwd_hash',password='$pword' WHERE username='$uname' ;";
	mysql_query($query,$conn);
	
	//echo mysql_error();
    //if(mysql_num_rows($query)>1)
    echo "<script> alert('User Successfully updated. Thank You');document.location='index.php';</script>";
	mysql_close($conn);
	
