<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "CEN4010_S2018g06";
$password = "cen4010_s2018";
$dbname = "CEN4010_S2018g06";
$znumber = $_POST['znumber'];
$uname = $_POST['username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "Insert into users values('".$uname."','".$znumber."','"."0"."','"."Student"."','"."NULL"."','"."NULL"."')";
$sql2 = "select name from users";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$names = array();

while($row = $result2->fetch_array()){
    $names[] = $row['name'];
}

$_SESSION['AllUsers'] = $names;

$conn->close();
echo"<h3>User :". $uname ." added successfully</h3> ";
echo "<script>setTimeout(\"location.href = 'admin.php ';\",1500);</script>";

?>