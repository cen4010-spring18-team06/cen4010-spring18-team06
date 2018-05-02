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

$sql = "select name from users where znumber = '".$znumber."' ";
$sql2 = "select times from users where znumber = '".$znumber."'";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);


function resettime()
{
    $sql3 = "update users set time = " . time() . " where znumber = '".$znumber."'";
    $conn->query($sql3);
}

if ($result->num_rows > 0) {
    // output data of each row    
    $row2 = $result2->fetch_assoc();
    while($row = $result->fetch_assoc()) {
        echo "Login Successful!<br>Your Name: " . $row["name"]. "<br>";
        echo "Current Time: ".time()."<br>MySQL Time: ".$row2["times"]."<br>";
        if(time() > $row2["times"] + 1800)
        {
            echo "Session time is up Start new session?<br><form action='called.php' method='POST'><input type='submit' class='button' name='reset' value='resettime' /><input type='text' name='znumber' value='". $znumber ."' /></form>";
        }
        else {
            echo (1800-(time() - $row2["times"]))/60 . " minutes remaining";
        }
    }
} else {
    echo "Login Failed!";
    echo "<script>setTimeout(\"location.href = '../index.html ';\",1500);</script>";
}

$conn->close();
?>
