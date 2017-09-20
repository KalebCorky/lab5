<?php
   require_once('database.php');
   mysqli_connect("localhost", $username, $password, "shopDB");
   $result = mysql_query("SELECT firstName FROM customers");
        $row = mysql_fetch_array($result);
 
        echo $row['firstName'];
    
?>