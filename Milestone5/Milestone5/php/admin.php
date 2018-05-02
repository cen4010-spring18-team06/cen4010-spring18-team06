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

        <title>Admin Page</title>
        <script>
            function validateForm() {
                alert("Currently Under Maintenance");
            }
            function relocate_home()
            {
                location.href = "logout.php";
            } 
            function validate(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode( key );
                var regex = /[0-9]|\./;
                if( !regex.test(key) ) {
                    theEvent.returnValue = false;
                    if(theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        </script>
        <style>
            a{
                cursor: pointer;
            }
            h5:hover{
                color: red;
            }
            textarea{
                width: 100%;
                height: auto;
                resize: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center"><h2>Admin Settings</h2></div>
            </div>
            <div class="row">
                <div class="col"><a data-toggle="modal" data-target="#AddModal"><h5>Add user</h5></a></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"><a data-toggle="modal" data-target="#RemoveModal"><h5>Remove user</h5></a></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"><a data-toggle="modal" data-target="#BlockModal"><h5>Block user</h5></a></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"><a onclick="validateForm()"><h5>Lab Settings</h5></a></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"><a href="student.php"><h5>Select A Bench</h5></a></div>
                <div class="col"></div>
            </div>
        </div>
        <!-- Modal Add User-->
        <div id="AddModal" class="modal fade" role="dialog">
            <div class="container">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="text-align: center">Add User</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form method="post" action= "adduser.php">
                                <div class="form-group">
                                    <label>Z-Number (Numbers Only):</label>
                                    <input type="text" name="znumber" pattern=".{8}"   required title="Must be 8 Characters" maxlength="8" onkeypress='validate(event)' class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Name (First, Last):</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Add User-->  
        <!-- Modal Remove User-->
        <div id="RemoveModal" class="modal fade" role="dialog">
            <div class="container">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="text-align: center">Remove User</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form method="post" action= "removeuser.php">
                                <div class="form-group">
                                    <label>Users:</label>
                                    <select name="username">
                                        <?php
                                        foreach($_SESSION['AllUsers'] as $value){
                                        ?><option name="username"> <?php echo "$value"; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div>
                                    <textarea>Reasons</textarea>
                                </div>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Remove User-->  
        <!-- Modal Block User-->
        <div id="BlockModal" class="modal fade" role="dialog">
            <div class="container">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="text-align: center">Block User Access</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form name="BlockUser">
                                <div class="form-group">
                                    <label>Users:</label>
                                    <select id="Users">
                                        <?php
                                        foreach($_SESSION['AllUsers'] as $value){
                                        ?><option> <?php echo "$value"; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Access:</label><br>
                                    <input type="checkbox" name="access1">Access1<br>
                                    <input type="checkbox" name="access2">Access2<br>
                                    <input type="checkbox" name="access3">Access3<br>
                                    <input type="checkbox" name="access4">Access4<br>
                                    <input type="checkbox" name="access5">Access5<br>
                                </div>
                                <input type="submit" value="Submit" onclick="validateForm()">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Block User-->  
        <button type="button" class="btn btn-outline-primary" onclick="relocate_home()">Logout</button>
    </body>
</html>
