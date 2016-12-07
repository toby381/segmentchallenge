<?php
include "stravalogon.php";

if( isset($_GET["cid"]) ) {
    $currentUser->addEmailAlert($_GET["cid"],$_GET["pos"]);
    echo "on";
} else {
    echo "mangler challenge ID";
}



?>