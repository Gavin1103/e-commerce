<?php
$db_name = "keuzedeel_ecommerce";
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
define("BASEURL","http://localhost/programming/keuzedeel/e-commerce/");
// define("BASEURL_CMS","http://localhost/programming/database/p3/database-webshop/database-webshop/admin/");

?>