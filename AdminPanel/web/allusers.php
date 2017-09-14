<?php
include("session.php");
?>
<html>
<head>                                
    <title>All Users-Daily Inward/Outward Transaction Report</title>
    <link href="css/Dashboard.css" rel="stylesheet" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

    <body>
        <input type="checkbox" id="toggle">
        <label for="toggle" class="togglestyle"><img src="images/menu-button-of-three-horizontal-lines.png"></label>
<header>
        <div id="Company">Admin Portal</div>
        </header>
    <nav class="Dashboard">
        <?php
        if(logged_in()){
            echo'<h3><img src="images/user-avatar-main-picture.png">&nbsp;&nbsp;'.$_SESSION['username'].'</h3>';
        }
        else{
    echo'<h3>Dashboard</h3>';    
        }
    ?>


    <ul>
        <li><a href="index.php"><img src="images/web-page-home.png">&nbsp;&nbsp;Home</a></li>
    <li><a href="insert.php"><img src="images/add-contacts.png">&nbsp;&nbsp;Insert</a></li>
    <li><a href="remove.php"><img src="images/remove-contact.png">&nbsp;&nbsp;Remove</a></li>
    <li><a href="update.php"><img src="images/pencil-edit-button.png">&nbsp;&nbsp;Update</a></li>
    <li><a href="search.php"><img src="images/magnifier.png">&nbsp;&nbsp;Search</a></li>
    <?php
						if(logged_in())
				        {
						echo '
						<li><a href="logout.php"><img src="images/logout.png">&nbsp;&nbsp;Logout</a></li>';					
	                    }
?>

        </ul>
    </nav>
        
    <h4>All Users</h4>
   <?php

// Database Connection String
$conn=mysql_connect("localhost","root","");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("diotr", $conn);
?>

         <div class="tablecontent"> 
            <?php
           

     

$sql = "SELECT username FROM users"; 
$r_query = mysql_query($sql); 
echo'
<CENTER>
                    <table class="search">
                    <tr><th> Username</th>
                    
                
                    </tr>';
while ($row = mysql_fetch_array($r_query))
{ 
echo'
<tr> 
<td>'.$row['username'].'</td>  

</tr>';
}

        
mysql_close();
?>  
</div>
            
            
            
    
          <div class="footer">
<p>All Rights Reserved-2016.Hitachi-Hirel Power Electronics Pvt. Ltd.</p>

</div>   
    </body>
</html>