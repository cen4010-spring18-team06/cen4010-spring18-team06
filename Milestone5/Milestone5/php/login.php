<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "CEN4010_S2018g06";
$password = "cen4010_s2018";
$dbname = "CEN4010_S2018g06";
$znumber = $_POST['znumber'];
$userpassword = $_POST['password'];
$password_hash = password_hash($userpassword, PASSWORD_DEFAULT);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from users where znumber = '".$znumber."' ";
$sql2 = "select times from users where znumber = '".$znumber."'";
$sql4 = "select type from users where znumber = '".$znumber."'";
$sql5 = "select name from users";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);
$names = array();
$uinfo = $result->fetch_assoc();


$_SESSION['Username'] = $uinfo["name"];
$_SESSION['Time'] =  $uinfo["times"];
$_SESSION['Type'] = $uinfo["type"];
$_SESSION['znumber'] = $uinfo["znumber"];
while($row = $result5->fetch_array()){
    $names[] = $row['name'];
}

$_SESSION['AllUsers'] = $names;

if($_SESSION['Type'] == "Student")  
{
    header('Location: student.php');
}
else if($_SESSION['Type'] == "Admin")
{
    header('Location: admin.php');
}



$conn->close();
?>
