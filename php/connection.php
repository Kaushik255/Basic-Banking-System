
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "banking_system.sql";

$conn = mysqli_connect("localhost", "root", "", "banking_system.sql","3306");

if (!$conn) {
  die("Could not connect to the database due to the following error --> " . mysqli_connect_error());
}

?>
