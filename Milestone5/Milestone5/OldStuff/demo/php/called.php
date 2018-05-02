<?php
$servername = "localhost";
$username = "CEN4010_S2018g06";
$password = "cen4010_s2018";
$dbname = "CEN4010_S2018g06";
$znumber = $_POST['znumber'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	$sql3 = "update users set times = " . time() . " where znumber = ".$znumber;
	$conn->query($sql3);
	echo "Workstation reserved successfully, use this site again to check how much time is remaining.";

$conn->close();
?>
