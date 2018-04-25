<?php 
define('ISITSAFETORUN', TRUE);
$webdata = array();
//$mytable = ""; //set a variable for the database table
$mytitle = 'Submit A Walk';
$mycss   = 'OU_Walking_club2.css'; //set a variable for the css file
$myjs    = 'OUWalkingClub.js'; //set a variable for the js file
$valid   = TRUE; //set flag for errors in form
require 'header.php'; //the header information
//echo "<h1>$mytitle</h1>"; //insert the h1 titile
?>

<div id="Banner">
    <div class="logo1">
        <img src="OU_LOGO1.png" name="logo1" alt="Open Unviersity Logo" style="float:left width:50px;height:40px;">
    </div>
    <h1>OU Walking Club</h1>
    <div id="date_time">
        <p id="clock">clock</p>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/moment.js"></script>
    
        <script type="text/javascript">
            jQuery('#clock').fitText(0.3);
            function update() {
            jQuery('#clock').html(moment().format('DD MMMM YYYY H:mm:ss'));
            }

            setInterval(update, 1000);
        </script>
    </div>
    
   
</div>





<div id="menu_section">
<label for="show-menu" class="display-menu" role="navigation" aria-label="show menu">Submit A Walk</label>
    <input type="checkbox" id="show-menu" value="button" >
    <nav id="menu" role="navigation" aria-label="main menu">
      <!--  <input type="checkbox" id="main-menu" value="button" >
        <nav id="menu"> -->
            
                <ul>
                    <li tabindex="1"> <div id="first_menu_item"><a href="submit_a_walk.php" >Membership Registration </a></div>
                    </li>
                    <li tabindex="2"> <div id="second_menu_item"><a href="submit_a_walk.php">Review A Walk</a></div>
                    </li>
                    <li tabindex="3"> <div id="third_menu_item"><a href="submit_a_walk.php">View Events</a></div>
                    </li>
                </ul>
               
            </nav>
        </div>

<div id="page_title">

    <?php 
        echo "<h2>$mytitle</h2>"
    ?>
</div>             

        <div id="form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  name = "submit_a_walk">
        <label for="Name_of_Walk">Name of Walk:</label>
        <input type="text" name="Name_of_walk" value="Walk name:" tabindex="4" autofocus >
        
        <label for="Date">Date:</label>
        
        <input type="date" name="Date"  min="2018-04-01" tabindex="5">
        
        <label for="Walk_Start_Time">Start Time:</label>
        <input type="time" name="walk_start_time" tabindex="6">
        
        <label for="Walk_leader">Leader:</label>
        <input type="text" name="walk_leader" value="Leader" tabindex="6">
        
        <label for="Longtitude">Meeting point-long:</label> 
        <input type="number" name="Longtitude" value="0" tabindex="7">
        
        <label for="Lattitude">Meeting point-lat:</label>
        <input type="number" name="Lattitude" value="0" tabindex="8" step="any">
        
        <label for="Distance:">Distance:</label>
        <input type="number" name="Distance" value="0" tabindex="9" step="any" min="0">
        
        <label for="Description">Route description:</label>
        <input type="text" name="Description" value="Route description"  maxlength="500" rows="10" cols="40" tabindex="10">
        
        <label for="Notes">Notes:</label>
        <input type="text" name="Notes" value="Any Notes?" maxlength="350" rows="10" cols="40" tabindex="11">
        
        <input type="hidden" name="session_ID" value="ABCDEF012345">

        <input type="submit" name="submit" value="Submit" tabindex="12">
        </form>
        </div>

        <div class="logo2">
            <img src="OU_LOGO2.png" alt="Open Unviersity coat of arms" style="float:left width:60px; height:50px;">
        </div>

        <div class="walking_image">
            <img src="walking1.jpg" alt="Two Runners running along a beach at sun set" style="float:right width:120px; height:100px">  
        </div>
<div class="footer">
<?php
    require 'footer.php';
?>
</div>     