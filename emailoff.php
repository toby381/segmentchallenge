<?php
include "stravalogon.php";

if(isset($_GET["cid"]) ) {
    $currentUser->removeEmailAlert($_GET["cid"]);
    echo "off";
} else {
    echo "mangler challenge ID";
}




?>