<?php
require_once 'lib/StravaApi.php';
include "lib/class_lib.php"; 
include "functions.php";

$output_line=0;
function outputMessage($txt,$level = 0) {
    global $output_line;
   
    if($level== 0) {echo "<h3>". $output_line . " * START *  </h3> " . $txt. "<br><br>";}
    else if($level== 1) echo "&nbsp;&nbsp; --- : " . $txt. "<br><br>";
    else if($level== 2) echo "&nbsp;&nbsp;&nbsp;&nbsp;--- : " . $txt. "<br><br>";
    else if($level == -1) {echo "* ". $output_line . " : " . $txt. "<br> <strong>********************** SLUTT *********************</strong> <br><br>"; $output_line++;}
}    

$stravaCallCount    = 0; 
function stravaCallNumCheck() {
    global $stravaCallCount;
    $stravaCallCount++;
    if( $stravaCallCount > 500) {
        $conn->close();
        outputMessage("***API-limit exit: ".  $stravaCallCount); 
         exit();
        
    }
}  
function getTheDate($d){
    return date("c", strtotime($d));
}
 


global $local;
$local = false;
global $root_url;

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//error_reporting(0);

if(!$local) {
    $servername = "31.24.132.140";
    $username = "c1_sc_admin";
    $password = "Stallerud381";
    $dbname = "c1sc";
    $root_url = "/";
} else {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "c1sc";
    $root_url = "/segmentchallenge/";
    
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
outputMessage("Koblet til database!");
outputMessage("",-1);



?>



<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link type="text/css" href="style.css" rel="stylesheet" ></link>
    </head>
    <body>
    

<?php
        

$today              = getTheDate(date("c")); 
outputMessage("Dagens dato " . $today); 
outputMessage("",-1);



        
// KOBLER TIL STRAVA        
$clientId=3493;
$clientSecret='f2cef53be42d5e9e1190ff8252f2614620d3997d';
$accessToken='c3d6701aca3688906be1e701eb73f82a41b75e6a';

$api = new Iamstuartwilson\StravaApi(
   $clientId,
   $clientSecret
);

$api->setAccessToken($accessToken);


        

       
// ************* Segment-update    

$sql = "SELECT * FROM segments WHERE name IS NULL OR name=''";
$result = $conn->query($sql);      
        
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // henter segmentdata fra strava-API
        $seg = new segment($row["id"]);
        $seg->updateFromStrava($conn,$api); 
        $seg->importGPX($api);
        outputMessage("oppdatert: " . $seg->name,1); 
        
        stravaCallNumCheck();
    }
    outputMessage("",-1);
} else {
     outputMessage("......Alle segmenter er oppdatert",-1);
}
outputMessage("Start segmentGPX-oppdatering........");       
$sql = "SELECT * FROM segments";
$result = $conn->query($sql);      
        
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // henter segmentdata fra strava-API
        $seg = new segment($row["id"]);
        $seg->setValues($row);
       
        if(!$seg->checkExistGPX()) { 
            $seg->importGPX($api);
            outputMessage("oppdatert GPX: " . $seg->name,1); 
        }
        
   
    }
    outputMessage("",-1);
}    
 // Segment-update  SLUTT ******       
        
// *********** Effort-update            
    

$sql = "SELECT challenge_relation.id AS relationID,
                challenge_relation.segment_id AS segmentID, 
               challenge_relation.challenge_id AS challengeID, 
               challenge.start_date AS startDate, 
               challenge.end_date AS endDate, 
               challenge_relation.last_update AS lastUpdate,
               challenge_relation.page_update AS pageUpdate,
               challenge.name AS challengeName,
               challenge.path AS path,
               segments.name AS segmentName
        FROM challenge_relation 
            JOIN challenge 
                ON challenge_relation.challenge_id = challenge.id
            JOIN segments 
                ON challenge_relation.segment_id = segments.id
        ORDER BY challengeID";
        
$result = $conn->query($sql);      
$challenge_path = $last_path = "";       
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $challenge_path = $row["path"];
            
        /*if($last_path != $challenge_path && $last_path!="") {
                $cache_file = getcwd() . '/cache/cache_'.$last_path.'.php';
                $url = "http://segmentchallenge.lopsloggen.no/challenge/". $last_path;
                get_and_write($url, $cache_file);
                 outputMessage(".....oppdaterer CACHE for $last_path",1);
                
        }*/
        
        // henter segmentdata fra strava-API
        $rel_id         = $row["relationID"];
        $seg_id         = $row["segmentID"];
        $challenge_id   = intval($row["challengeID"]);
        $last_path = $challenge_path;

        
        
        $start_date =getTheDate($row["startDate"]);
        $end_date = getTheDate($row["endDate"]);
        $last_update = getTheDate($row["lastUpdate"]);
          //outputMessage($last_update ."<". $today ."&&". $start_date ."<=". $today. "&&". $end_date .">=". $today  );
        if($last_update < $today && $start_date <= $today && $end_date >= $today  ) {
            outputMessage( "<h4>Oppdaterer efforts fra segment:</h4> -> <strong>" . urldecode($row["segmentName"]) . "</strong> i challenge <strong>" .$row["challengeName"]."</strong>....");
            if($start_date < $last_update) $start_date = $last_update;
            
            $start_date = date("Y-m-d", strtotime($start_date)); // startdate må fikses - 
            $start_date = date("c", strtotime($start_date)); // blir satt til kl 00:00 på dagens dato
            $end_date   = date("c", strtotime($today));
            
            $bucket     = 200;
            $page       = intval($row["pageUpdate"])+1;
            $string     = "segments/".$seg_id."/all_efforts";
            //outputMessage( "strava-kall: " . $string . " * startdate: " . $start_date . " * enddate: " . $end_date ."<br>");

            $strava_results    = $api->get($string, array('page' => $page,'per_page' => $bucket,'start_date_local' => $start_date,'end_date_local' => $end_date) );



            foreach ($strava_results as $strava_result) {

                $sql = "INSERT INTO efforts (id,athlete_id,seconds,start_date,challenge_id,segment_id,activity_id) VALUES (".$strava_result->id.",". $strava_result->athlete->id .",".  $strava_result->elapsed_time . ",'". date("c", strtotime($strava_result->start_date)) ."',".$challenge_id.",".$seg_id . ",". $strava_result->activity->id .")";

                if ($conn->query($sql) === TRUE) outputMessage("Efforts-database input - athlete-id: " . $strava_result->athlete->id,2);
                else outputMessage("Error: " .$conn->error,2);
                
                 $conn->query("INSERT INTO athletes (id) VALUES (" . $strava_result->athlete->id . ")");

            }

           // outputMessage($sql,1);
            $effortcount = count($strava_results);
            if($effortcount < $bucket) {
                $conn->query("UPDATE challenge_relation SET last_update='". $end_date ."', page_update=0 WHERE id=".$rel_id);
                outputMessage("..... oppdatering av segment ferdig. Antall=".$effortcount,-1);
            } else {
                // pagination
                $conn->query("UPDATE challenge_relation SET  page_update=".$page." WHERE id=".$rel_id);
                outputMessage("..... oppdatering av segment stoppet på side " .$page . " ...forstetter neste gang...",-1);
            }
            
           // 

            
            stravaCallNumCheck();
            
        } 
    }
}
     
        
// ************* Athlete-update    
outputMessage("Start athletedata-oppdatering........");
$sql = "SELECT * FROM athletes WHERE firstname IS NULL OR firstname=''";
$result = $conn->query($sql);      
$max_athlete_num = 0;      
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $max_athlete_num++;
        // henter segmentdata fra strava-API
        $a_id=$row["id"];
        $string = "athletes/" . $a_id;
        $strava = $api->get($string);
       
        $firstname = mysqli_real_escape_string($conn,$strava->firstname);
        $lastname = mysqli_real_escape_string($conn,$strava->lastname);
        $sex = $strava->sex;
        $sql = "UPDATE athletes SET firstname='$firstname', lastname='$lastname', sex='$sex' WHERE id=".$a_id;
        $result_update = $conn->query($sql); 
        outputMessage("oppdaterer athlete firstname='$firstname', lastname='$lastname', sex='$sex",1);
        stravaCallNumCheck();
        if($max_athlete_num >100)  {
             outputMessage("......stoppet på 100 athleter, henter resten siden....",-1);
            break;
        }
    }
} else {
     outputMessage("......Alle athletes er oppdatert",-1);
}
        
 // Segment-update  SLUTT ******          
        

// ************* Athlete-sex-update  
        
outputMessage("Start athlete-SEX-oppgradering........");
$sql = "SELECT * FROM athletes WHERE sex IS NULL";
$result = $conn->query($sql);      
$max_athlete_num = 0;      
 if ($result->num_rows > 0) {
    // output data of each row
     ob_start();
    while($row = $result->fetch_assoc()) {
        $max_athlete_num++;
        // henter segmentdata fra strava-API
        $a_id=$row["id"];
        $string = "athletes/" . $a_id;
        $strava = $api->get($string);
       
        $firstname = $strava->firstname;
        $lastname = $strava->lastname;
        $sex = $strava->sex;
        $sql = "UPDATE athletes SET sex='$sex' WHERE id=".$a_id;
        $result_update = $conn->query($sql); 
        outputMessage($max_athlete_num . " - oppdaterer athlete firstname='$firstname', lastname='$lastname' sex=$sex",1);
        stravaCallNumCheck();
        
        ob_flush();
        usleep(100000); // 0.1 sec
        
        if($max_athlete_num >100)  {
             outputMessage("......stoppet på 100 athleter, henter resten siden....",-1);
            break;
        }
    }
} else {
     outputMessage("......Alle athletes er oppdatert",-1);
}
         
        

outputMessage("<br>***Fullført! Antall API-kallinger: ".  $stravaCallCount . "<br>");      
$conn->close();

?>


        
        
    </body>
</html>