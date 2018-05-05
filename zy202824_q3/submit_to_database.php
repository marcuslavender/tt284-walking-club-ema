<?php 
define('ISITSAFETORUN', TRUE);
ini_set('display_errors', 1); 
error_reporting(E_ALL);
$webdata = array();
$databasename = 'walkingclub.sqlite';

$db = new SQLite3($databasename);



if(!defined('ISITSAFETORUN')) {
    die(''); 
    }
    if (!empty($_POST))
    {
        echo '<p>' . $_POST["Name_of_walk"] . '</p>';
        echo '<p>' . $_POST["Walk_leader"] . '</p>';
        foreach ($_POST as $key => $value)
        {

           if ( is_array( $value )){ //multiple checkboxes are sent as an array
                foreach ($value as $cbkey => $cbvalue) //extract checkbox values
                {
                    $webdata[$key.$cbkey] = $cbvalue; //create a separate key for each checkbox item to store in our own array
                }

                echo '<p>' . $webdata[$key] . '</p>';
            
            } else{
            $webdata[$key] = $value;
            
            echo '<p>' . $webdata[$key] . '</p>';
            }
        }
    } else{
    
    }
    if (!empty($_GET))
    {
        foreach ($_GET as $key => $value)
        {
            $webdata[$key] = $value;
        }
    }

    //$sql = "INSERT OR REPLACE INTO 'walk' ( 'name' , 'walk_date') VALUES ('Marcus', 'Ely')";
    
    //if(!empty($sql))
    //{
      //  $db->exec($sql) or die('Add data failed');
        //echo '<p>' . $result . '</p>';
    //}
    //$sql = "INSERT OR REPLACE INTO 'walk' ( 'name' , 'walk_date') VALUES ('Marcus', 'Ely')";
    //$sql = "INSERT OR REPLACE INTO 'walk' ( 'name' , 'walk_date' , 'start_time', 'leader', 'meeting_point', 'meetingpoint_latlong', 'distance', 'route', 'notes', 'status', 'session_id' ) VALUES (':name', ':walk_date', ':start_time',
    //':leader', ':meeting_point', ':meetingpoint_latlong', 'distance', ':route', ':notes', ':status', ':session_id')";

    //$stmt = $db->prepare( $sql );
    //$stmt->bindValue(':name' ,$webdata['Name_of_walk'], SQLITE3_TEXT);
    //$stmt->bindValue(':walk_date',$webdata['Date'], SQLITE3_TEXT);
    //$stmt->bindValue(':start_time' , $webdata['Walk_start_time'], SQLITE3_TEXT);
    //$stmt->bindValue(':leader' , $webdata['Walk_leader'], SQLITE3_TEXT);
    //$stmt->bindValue(':meeting_point' , $webdata['Meeting_point'], SQLITE3_TEXT);
    //$stmt->bindValue(':meetingpoint_latlong' , $webdata['Meeting_point_latlong'], SQLITE3_TEXT);
    //$stmt->bindValue(':distance' , $webdata['Distance'], SQLITE3_TEXT);
    //$stmt->bindValue(':route' , $webdata['Route'], SQLITE3_TEXT);
    //$stmt->bindValue(':notes' , $webdata['Notes'], SQLITE3_TEXT);
    //$stmt->bindValue(':status' , $webdata['Status'], SQLITE3_TEXT);
    //$stmt->bindValue(':session_id', $webdata['Session_id'], SQLITE3_TEXT);


    //$result = $stmt->execute() or die('Add data failed');
    //echo '<p>' . $result . '</p>';
    ?>

