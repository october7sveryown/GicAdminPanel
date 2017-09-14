<?php

      

     $conn=mysqli_connect("localhost","root","","GIC");

	if(!$conn)
	{
		die('Could not connect'.mysql_error());
	}
	$ename=$_POST['event_name'];
	$evenue=$_POST['event_venue'];
    $edate=$_POST['event_date'];
$estime=$_POST['event_starttime'];
$eetime=$_POST['event_endtime'];
mysqli_select_db($conn,"GIC");
 $sql = "SELECT event_name FROM `GIC`.`event_details` WHERE event_name = '" . mysqli_real_escape_string($conn,$ename) . "'";
    $result = mysqli_query($conn,$sql) or die('error');
    $row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)) {
     echo "<script> alert('Event Already exists');document.location='AddUser.php';</script>";    
    mysqli_close($conn);
       }

	else{
  
        
    $query="INSERT INTO `GIC`.`event_details` (`event_name`,`event_venue`,`event_date`,`event_starttime`,`event_endtime`) VALUES ('$ename', '$evenue', '$edate','$estime','$eetime');";
	mysqli_query($conn,$query);
        //echo mysql_error();
    //if(mysql_num_rows($query)>1)
    echo "<script> alert('Event Added. Thank You');document.location='index.php';</script>";
	mysqli_close($conn);
}
    
?>