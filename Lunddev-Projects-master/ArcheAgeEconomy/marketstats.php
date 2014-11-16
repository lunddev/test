<?php 
	$dbhost = "0.0.0.0";
	$dbuser = "lunddev";
	$dbpass = "";
	$dbname = "c9";
	$port = "3306";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
	
	 $result = mysqli_query($connection, "SELECT AAItems.ItemName, Price, Date FROM AAItems INNER JOIN AAPrices ON AAItems.ItemName = AAPrices.ItemName WHERE AAPrices.Date = 'Today'");


      while($row = mysqli_fetch_assoc($result))
  {
  echo $row['ItemName'];
  echo $row['Price'];
  echo "<br />";
  }
	

	
	
	
	
	
	
	
	
	
?>


<?php 

mysql_close($connection);

?>