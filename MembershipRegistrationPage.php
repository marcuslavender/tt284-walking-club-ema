<?php 
define('ISITSAFETORUN', TRUE);
$webdata = array();
//$mytable = ""; //set a variable for the database table
$mytitle = 'Submit A Walk';
$mycss   = "OUWalkingClub.css"; //set a variable for the css file
$myjs    = "OUWalkingClub.js"; //set a variable for the js file
$valid   = TRUE; //set flag for errors in form
require 'header.php'; //the header information
//echo "<h1>$mytitle</h1>"; //insert the h1 titile
?>

<div id="Banner">
    <img src="OU_LOGO1" alt="Open Unviersity Logo">
    <h1>OU Walking Club</h1>
    <div id="Date_Time">
        <p id="clock">clock</p>
        <script src="$myjs"></script>
        <script>
            window.setInterval(function() {
            clock();
            },1000);
        </script>
    </div>
</div>


<?php 
echo "<h1>"

<div id="banner"><h1>Main Menu</h1></div>
        <input type="checkbox" id="main-menu" value="button" >
        <nav id="menu">
            
                <ul class="main-menu">
                    <li ><a href="Submit.html" >Search for a term </a>
                       
                    </li>
                    <li><a href="template.html">Add a new term and definition</a>
                    </li>
                    <li><a href="template.html">Edit or delete a term</a>
                    </li>
                </ul>
            
        </nav>