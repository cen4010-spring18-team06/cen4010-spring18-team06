<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
        $servername = "localhost";
        $username = "CEN4010_S2018g06";
        $password = "cen4010_s2018";
        $dbname = "CEN4010_S2018g06";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "update Stations set In_Use = '"."No"."' where In_Use = '"."Yes"."'";
        $result = $conn->query($sql);
        
        // remove all session variables
        session_unset(); 

        // destroy the session 
        session_destroy();

        echo "Logging Out...."; 
        echo "<script>setTimeout(\"location.href = '../index.html ';\",1500);</script>"
        ?>

    </body>
</html>