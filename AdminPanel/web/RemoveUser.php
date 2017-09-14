
<?php

       
     $conn=mysqli_connect("localhost","root","","GIC");
	if(!$conn)
	{
		die('Could not connect'.mysqli_connect_error());
	}
	$ename=$_POST['event_name'];

	 mysqli_select_db($conn,"GIC");
     $sql = "SELECT event_name FROM event_details WHERE event_name = '" . mysqli_real_escape_string($conn,$ename) . "'";
    $result = mysqli_query($conn,$sql) or die('error');
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)) {
     
	$query="DELETE FROM   `GIC`.`event_details` WHERE event_name='$ename'";
	mysqli_query($conn,$query);
	
	//echo mysql_error();
    //if(mysql_num_rows($query)>1)
    echo "<script> alert('Event Successfully removed. Thank You');document.location='index.php';</script>";
	mysqli_close($conn);
    }
else
{
    echo "<script> alert('No such event found. Try Again');document.location='remove.php';</script>";
}
