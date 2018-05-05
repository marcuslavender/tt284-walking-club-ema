<?php 
define('ISITSAFETORUN', TRUE);
ini_set('display_errors', 1); 
error_reporting(E_ALL);
$webdata = array();
$databasename = 'walkingclub.sqlite';




if (!empty($_POST))
{
    foreach ($_POST as $key => $value)
    {
    $webdata[$key] = $value;
   // echo "<p>Extracting key= {$key} value = {$value} </p>";
    }
}
if (array_key_exists('Name_of_walk', $webdata)){
    $db = new SQLite3($databasename);
    $sql = "INSERT OR REPLACE INTO 'walk' ( 'name', 'walk_date', 'start_time', 'leader', 'meeting_point', 'meeting_latlong', 'distance', 'route', 'notes', 'status') VALUES (:name_of_walk ,:date, :walk_start_time, :leader, :meeting_point, :meeting_latlong, :distance, :route, :notes, :status)"; //create the SQLite instruction to add this data to our database
    echo "<p>{$databasename}  {$sql}</p>";
    $stmt = $db->prepare( $sql );
    $stmt->bindValue(':name_of_walk' ,$webdata['Name_of_walk'], SQLITE3_TEXT);
    $stmt->bindValue(':date',$webdata['Date'], SQLITE3_TEXT);
    $stmt->bindValue(':walk_start_time',$webdata['Walk_start_time'],SQLITE3_TEXT);
    $stmt->bindValue(':leader',$webdata['Walk_leader'],SQLITE3_TEXT);
    $stmt->bindValue(':meeting_point', $webdata['Meeting_point'],SQLITE3_TEXT);
    $stmt->bindValue(':meeting_latlong', $webdata['Meeting_point_latlong'],SQLITE3_TEXT);
    $stmt->bindValue(':distance', $webdata['Distance'],SQLITE3_TEXT);
    $stmt->bindValue(':route', $webdata['Route'],SQLITE3_TEXT);
    $stmt->bindValue(':notes', $webdata['Notes'],SQLITE3_TEXT);
    $stmt->bindValue(':status', "not approved",SQLITE3_TEXT);
    $result = $stmt->execute();
    
}

    ?>

