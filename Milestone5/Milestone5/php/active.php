<?php require "../header.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel="icon" href="favicon.ico">

        <title>Student Page</title>
        <script>
            window.setInterval(function(){
                setTimeout(time(), 3000);
            }, 1000);
            function time(){
                <?php
                $_SESSION['Time'] = $_SESSION['Time'] - 1;
                ?>
                window.location.reload(true);
            }
            function relocate_home()
            {
                location.href = "logout.php";
            } 
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    Building: <?php echo $_SESSION['Building'];?>
                </div>
                <div class="col">
                    Room Number: <?php echo $_SESSION['RoomNum'];?>
                </div>
                <div class="col">
                    Bench Type: <?php echo $_SESSION['BenchType'];?>
                </div>
                <div class="col">
                    Bench Number: <?php echo $_SESSION['BenchNum'];?>
                </div>
                <div class="col">
                    Time Remaing: <?php echo $_SESSION['Time'];?>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-primary" onclick="relocate_home()">Logout</button>
    </body>
</html>

