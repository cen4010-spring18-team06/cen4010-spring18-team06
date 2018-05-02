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

        <title>Bench Page</title>
        <script>
            function relocate_home()
            {
                location.href = "logout.php";
            } 
        </script>
    </head>
    <body>
        <div class="container">  
            <div class="row" >
                <div class="col" style="text-align: center">
                    <h1>Bench Select</h1>
                </div>
            </div>
            <div class="row">
                <form action="stations.php" method="post" id="Stations" class="Stations">
                    <div class="row">
                        <div class="container">
                            <div class="col">
                                <span>Select Building: </span>
                                <select name="Building" required>
                                    <option value="EE">Engineering East</option>
                                    <option value="EW">Engineering West</option>
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="container">
                            <div class="col">
                                <span>Select Room: </span>
                                <select name="Rooms" id="Rooms" required>
                                    <!-- js populates -->
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="container">
                            <div class="col">
                                <span>Select Station Type: </span>
                                <select name="StationType" id="StationType" required>
                                    <!-- js populates -->
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <div class="row" style="align-content: flex-end">
                        <p><input type="submit" value="Submit" /></p>
                    </div>
                </form>
            </div>

            <script type="text/javascript">
                /*
From http://www.dyn-web.com/tutorials/forms/select/paired.php
*/

                // removes all option elements in select list 
                // removeGrp (optional) boolean to remove optgroups
                function removeAllOptions(sel, removeGrp) {
                    var len, groups, par;
                    if (removeGrp) {
                        groups = sel.getElementsByTagName('optgroup');
                        len = groups.length;
                        for (var i=len; i; i--) {
                            sel.removeChild( groups[i-1] );
                        }
                    }

                    len = sel.options.length;
                    for (var i=len; i; i--) {
                        par = sel.options[i-1].parentNode;
                        par.removeChild( sel.options[i-1] );
                    }
                }

                function appendDataToSelect(sel, obj) {
                    var f = document.createDocumentFragment();
                    var labels = [], group, opts;

                    function addOptions(obj) {
                        var f = document.createDocumentFragment();
                        var o;

                        for (var i=0, len=obj.text.length; i<len; i++) {
                            o = document.createElement('option');
                            o.appendChild( document.createTextNode( obj.text[i] ) );

                            if ( obj.value ) {
                                o.value = obj.value[i];
                            }

                            f.appendChild(o);
                        }
                        return f;
                    }

                    if ( obj.text ) {
                        opts = addOptions(obj);
                        f.appendChild(opts);
                    } else {
                        for ( var prop in obj ) {
                            if ( obj.hasOwnProperty(prop) ) {
                                labels.push(prop);
                            }
                        }

                        for (var i=0, len=labels.length; i<len; i++) {
                            group = document.createElement('optgroup');
                            group.label = labels[i];
                            f.appendChild(group);
                            opts = addOptions(obj[ labels[i] ] );
                            group.appendChild(opts);
                        }
                    }
                    sel.appendChild(f);
                }

                // anonymous function assigned to onchange event of controlling select list
                document.forms['Stations'].elements['Building'].onchange = function(e) {
                    // name of associated select list
                    var relName = 'Rooms';

                    // reference to associated select list 
                    var relList = this.form.elements[ relName ];

                    // get data from object literal based on selection in controlling select list (this.value)
                    var obj = Select_List_Data[ relName ][ this.value ];

                    // remove current option elements
                    removeAllOptions(relList, true);

                    // call function to add optgroup/option elements
                    // pass reference to associated select list and data for new options
                    appendDataToSelect(relList, obj);
                };

                // anonymous function assigned to onchange event of controlling select list
                document.forms['Stations'].elements['Rooms'].onchange = function(e) {
                    // name of associated select list
                    var relName = 'StationType';

                    // reference to associated select list 
                    var relList = this.form.elements[ relName ];

                    // get data from object literal based on selection in controlling select list (this.value)
                    var obj = Select_List_Data[ relName ][ this.value ];

                    // remove current option elements
                    removeAllOptions(relList, true);

                    // call function to add optgroup/option elements
                    // pass reference to associated select list and data for new options
                    appendDataToSelect(relList, obj);
                };

                // object literal holds data for optgroup/option elements
                var Select_List_Data = {

                    // name of associated select list
                    'Rooms': {

                        // names match option values in controlling select list
                        EE: {
                            // optgroup label
                            'Rooms': {
                                text: ['100', '101', '102']
                            }
                        },
                        EW: {
                            'Rooms': {
                                text: ['100', '101']
                            }
                        }
                    },

                    'StationType': {
                        100:{
                            'Stations':{
                                text: ['Soldering', 'Welding', 'Electronics']
                            }
                        },
                        101:{
                            'Stations':{
                                text: ['Soldering', 'Welding', 'Electronics']
                            }
                        },
                        102:{
                            'Stations':{
                                text: ['Soldering', 'Welding']
                            }
                        }
                    }

                };
                // populate associated select list when page loads
                window.onload = function() {
                    var form = document.forms['Stations'];

                    // reference to controlling select list
                    var sel = form.elements['Building'];
                    sel.selectedIndex = 0;
                    // name of associated select list
                    var relName = 'Rooms';
                    // reference to associated select list
                    var rel = form.elements[ relName ];

                    // get data for associated select list passing its name
                    // and value of selected in controlling select list
                    var data = Select_List_Data[ relName ][ sel.value ];

                    // add options to associated select list
                    appendDataToSelect(rel, data);

                    var form = document.forms['Stations'];

                    // reference to controlling select list
                    var sel = form.elements['Rooms'];
                    sel.selectedIndex = 0;
                    // name of associated select list
                    var relName = 'StationType';
                    // reference to associated select list
                    var rel = form.elements[ relName ];

                    // get data for associated select list passing its name
                    // and value of selected in controlling select list
                    var data = Select_List_Data[ relName ][ sel.value ];

                    // add options to associated select list
                    appendDataToSelect(rel, data);
                };
            </script>

        </div>
        <button type="button" class="btn btn-outline-primary" onclick="relocate_home()">Logout</button>
    </body>
</html>
