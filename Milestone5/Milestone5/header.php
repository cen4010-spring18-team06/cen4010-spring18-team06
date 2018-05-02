<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">User: <?php echo $_SESSION['Username']; ?></div>
                <div class="col">Status: <?php echo $_SESSION['Type']; ?></div>
            </div>
        </div>
    </body>
</html>
