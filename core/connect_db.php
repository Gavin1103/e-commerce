<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "keuzedeel_ecommerce";

// Create connection
$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
define("BASEURL","http://localhost/programming/keuzedeel/e-commerce/");
// define("BASEURL_CMS","http://localhost/programming/database/p3/database-webshop/database-webshop/admin/");

?>