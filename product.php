<?php


$con=mysqli_connect("localhost","root","accuris", "webstore");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

} else {
	//echo "Connected to winestore ...";
}

//$con->query('select * from product');



$result = mysqli_query($con, "SELECT * FROM product");

while($row = mysqli_fetch_array($result)) {
  echo $row['name'] . " " . $row['description']. " " . $row['price'];
  echo "<br>";
}

mysqli_close($con);

?>