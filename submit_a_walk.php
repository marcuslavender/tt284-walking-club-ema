<?php 
define('ISITSAFETORUN', TRUE);
$webdata = array();
//$mytable = ""; //set a variable for the database table
$mytitle = 'Submit A Walk';
$mycss   = 'OU_Walking_club.css'; //set a variable for the css file
$myjs    = 'OUWalkingClub.js'; //set a variable for the js file
$valid   = TRUE; //set flag for errors in form
require 'header.php'; //the header information
//echo "<h1>$mytitle</h1>"; //insert the h1 titile
?>

<div class="banner">
    <div class="logo1">
        <img src="OU_LOGO1.png" id="logo1" alt="Open Unviersity Logo" style="float:left" width="60" height="40">
    </div>
    <h1 class="title">OU Walking Club</h1>
    <div id="date_time">
        <p id="clock">clock</p>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.0/moment.js"></script>
    
        <script type="text/javascript">
            jQuery('#clock').fitText(0.0);
            function update() {
            jQuery('#clock').html(moment().format('DD MMMM YYYY H:mm:ss'));
            }

            setInterval(update, 1000);
        </script>
    </div>
    
   
</div>





<div id="menu_section">
<label for="show-menu" class="display-menu"  aria-label="show menu">Submit A Walk</label>
    <input type="checkbox" id="show-menu" value="button" >
    <nav id="menu" role="navigation" aria-label="main menu">
      <!--  <input type="checkbox" id="main-menu" value="button" >
        <nav id="menu"> -->
            
                <ul class="menu_list">
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
    echo '<h2>' . $mytitle . '</h2>'
?>

</div>

        <div class="form">
        <form method="post" action="http://students.open.ac.uk/mct/tt284/reflect/reflect.php"  name="submit_a_walk">
        <label  for="name_of_walk">Name of Walk:</label>
        <input type="text" name="Name_of_walk" id="name_of_walk" placeholder="Walk name:" tabindex="4" pattern="/^[^~|\s]*$/{1,30}" autofocus class="input" required>
        
        <label for="date">Date:</label>
        <input type="date" name="Date" id="date" tabindex="5" class="input" required>
        
        <label  for="walk_start_time">Start Time:</label>
        <input type="time" name="Walk_start_time" id="walk_start_time"  tabindex="6" class="input" required>
        
        <label  for="walk_leader">Leader:</label>
        <input type="text" name="Walk_leader" id="walk_leader" placeholder="Leader:" pattern="[A-Za-z]{1,30}" tabindex="6" class="input" required>
        
        <label for="longtitude">Meeting point-long:</label> 
        <input type="number" name="Longtitude" id="longtitude" placeholder="0"  tabindex="7"  class="input" required>
        
        <label for="lattitude">Meeting point-lat:</label>
        <input type="number" name="Lattitude" id="lattitude" placeholder="0"  tabindex="8"  class="input" required>
        
        <label for="distance">Distance:</label>
        <input type="number" name="Distance" id="distance" placeholder="in miles:"  tabindex="9" class="input" required>
        
        <label for="description">Route description:</label>
        <input type="text" name="Description" id="description" pattern="[A-Za-z0-9[#?!@$%^&*-]]{1,500}" placeholder="Enter description:"  maxlength="500"  tabindex="10" class="input" required>
        
        <label for="notes">Notes:</label>
        <input type="text" name="Notes" id="notes" placeholder="Any Notes?:" pattern="[A-Za-z0-9[#?!@$%^&*-]]{1,500}" maxlength="500"  tabindex="11"  class="input">
        
        <input type="hidden" name="Session_ID" id="session_id" value="ABCDEF012345">

        <input type="submit" name="Submit" id="submit" value="Submit" tabindex="12">
        </form>
        </div>

        <div class="logo2">
            <img src="OU_LOGO2.png" alt="Open Unviersity coat of arms" style="float:left" width="50" height="50">
        </div>

        <div class="walking_image">
            <img src="walking1.jpg" alt="Close up of feet in running trainers, running on a road" style="float:right" width="150" height="100">  
        </div>
<div class="footer">
<?php
    require 'footer.php';
?>
     