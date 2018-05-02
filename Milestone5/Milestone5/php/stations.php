<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "CEN4010_S2018g06";
$password = "cen4010_s2018";
$dbname = "CEN4010_S2018g06";
$building = $_POST['Building'];
$room = $_POST['Rooms'];
$stationtype = $_POST['StationType'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "select Station_Num from Stations where Building = '".$building."' and Room = '".$room."' and Stations_Type = '".$stationtype."' and In_Use = '". "No"."'";

$result = $conn->query($sql);
$stationnumbers = array();

while($row = $result->fetch_array()){
    $stationnumbers[] = $row['Station_Num'];
}
$stationnum = array_rand($stationnumbers, 1);
$temp = $stationnumbers[$stationnum];

$_SESSION['Building'] = $building;
$_SESSION['RoomNum'] = $room;
$_SESSION['BenchType'] = $stationtype;
$_SESSION['BenchNum'] = $temp;

$sql2 = "update Stations set In_Use = '". "Yes"."' where Building = '".$building."' and Room = '".$room."' and Stations_Type = '".$stationtype."' and Station_Num = '". $temp."'";
$result2 = $conn->query($sql2);

$conn->close();
echo" Your station is: <h2>". $temp ."</h2> ";
echo "<script>setTimeout(\"location.href = 'active.php ';\",1500);</script>";

?>
