
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 
define('ISITSAFETORUN', TRUE);
$webdata = array();
//$mytable = ""; //set a variable for the database table
$mytitle = 'Retrieve walks by date';
$mycss   = 'OU_Walking_club.css'; //set a variable for the css file
$myjs    = 'OUWalkingClub.js'; //set a variable for the js file
$valid   = TRUE; //set flag for errors in form
$databasename = 'walkingclub.sqlite';
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  name="submit_date_query">
        <label  for="">Date Integer To Query:</label>
        <input type="number" name="Date_search" id="date_search" placeholder="Enter a integer:" tabindex="4" pattern='[0-9]{3}' autofocus class="input" required>
        <input type="hidden" name="Session_id" id="session_id" value="ABCDEF012345">

        <input type="submit" name="Submit" id="submit" value="Submit" tabindex="5">
        </form>
        </div>

        <div class="logo2">
            <img src="OU_LOGO2.png" alt="Open Unviersity coat of arms" style="float:left" width="50" height="50">
        </div>

        <div class="walking_image">
            <img src="walking1.jpg" alt="Close up of feet in running trainers, running along a road" style="float:right" width="150" height="100">  
        </div>

<script>
function showhide_table() 
{
    var x = document.getElementById("search_results");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<button onclick="showhide_table()">Show Search Results</button>



<div id="search_results"> 
<table id="results_table">
<?php

$from_date = date("Y-m-d");
echo "<p>" . $from_date . "</p>";
if(!empty($_POST['Date_search']))
{
    $date_integer = $_POST['Date_search'];
    $your_date = strtotime($date_integer . " " . "day", strtotime($from_date));
    $new_date = date("Y-m-d", $your_date);
    $to_date = $new_date;
    echo "<p>" . $to_date . "</p>";
}

$db = new SQLite3($databasename);
$sql='select * from walk where walk_date between ' . "'$from_date'  and   '$to_date'" . ';';
echo '<p>' . $sql . '</p>';
$result = $db->query($sql) or die('Query failed'); 


while ($row = $result->fetchArray())
{
    //echo "<p></p>associative array:" . htmlspecialchars($row['id']) . " : " . htmlspecialchars($row['name']) . "</p>";

 
 
        echo "<tr><td>" . htmlspecialchars($row['id']) . "</td><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['walk_date']) . "</td><td>"  . htmlspecialchars($row['start_time']) . "</td><td>" . htmlspecialchars($row['leader']) . "</td><td>" . htmlspecialchars($row['meeting_point']) . "</td><td>" . htmlspecialchars($row['meeting_latlong']) . "</td><td>" . htmlspecialchars($row['distance']) . "</td><td>" . htmlspecialchars($row['route']) . "</td><td>" . htmlspecialchars($row['notes']) . "</td><td>" . htmlspecialchars($row['status']) . "</td> </tr>";

};
?>
  </table>
</div>




<div class="footer">
<?php
    require 'footer.php';
?>







