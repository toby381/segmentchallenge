<?php
include "db.php";
include "lib/class_lib.php";
require_once 'lib/StravaApi.php';

if(!$local){
    $root_path = "http://segmentchallenge.lopsloggen.no/";
} else {
    $root_path = "http://localhost:8888/segmentchallenge/";
}

$challenge_path="";
$path_info = parse_path();
$page_description="";  
$cache_name = "";    


//CLEAN URL*************


switch($path_info['call_parts'][0]) {
  case 'challenge': 
        
        $challenge_path = $path_info['call_parts'][1];
        $sql = "SELECT * FROM challenge WHERE path='". $challenge_path."'";
         
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $challenge_id = intval($row["id"]);
            $page_name = $row["name"] . " - SegmentChallenge";
            $page_description = $row["description"];
            $cache_name = $challenge_path;
            
        }
        $page_path = $root_path . $path_info['call_parts'][0] . "/". $path_info['call_parts'][1];
        break;
  
  default:
        $page_name = "SegmentChallenge";
       
        $page_image = $root_path . "images/blue_sky_by_myrzik137.jpg";
        $page_path = $root_path;
        $cache_name = "front";
}
if($page_description == "" || $page_description==NULL)   $page_description = "SegmentChallenge sammenligner Strava-løpere over flere segmenter i samme område, innenfor en tidsperiode. En utfordring består av flere segmenter. Det er sammenlagttiden som rangerer hvem som er sjefen!";
$page_image = $root_path . "segmentchallenge.png";




$clientId=3493;
$clientSecret='f2cef53be42d5e9e1190ff8252f2614620d3997d';
$accessToken='c3d6701aca3688906be1e701eb73f82a41b75e6a';

$redirect="http://segmentchallenge.lopsloggen.no/index.php";


$api = new Iamstuartwilson\StravaApi(
   $clientId,
   $clientSecret
);


$currentUser = new user(0,$conn); // OPPRETTER NY USER-OBJEKT

// henter kode fra coockie
if(isset($_GET["logout"])) {
    setcookie("code", "", time() - 3600);
} 

if( !isset($_GET["logout"]) && isset($_COOKIE["code"])) {
    
    $strava_result = $api->tokenExchange($_COOKIE["code"]);
    $currentUser->setUserFromStrava($strava_result);

    $api->setAccessToken($currentUser->main_token);

} else {
// henter kode fra URL, eller venter på loginklikk
    if(!isset($_GET["code"])) {
        $loginURL = $api->authenticationUrl($redirect);
        $api->setAccessToken($accessToken);
    } else {
        $code=$_GET["code"];
        setcookie("code", $code, time() + (86400 * 30), "/");

        $strava_result = $api->tokenExchange($code);
        $currentUser->setUserFromStrava($strava_result);

        
        $currentUser->updateLoginCount();


    }
}
$currentUser->setApi($api);

// CACHING 
if(end($path_info['call_parts']) != "cache" && $path_info['call_parts'][0] == "challenge" && $currentUser->id==0) {
  if(!$local) checkAndSetCache();
}

?>