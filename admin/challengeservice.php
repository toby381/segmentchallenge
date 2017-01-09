<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type");
include "../db.php";
include "../lib/class_lib.php";

$today = date("Y-m-d", strtotime(date("Y-m-d")));
$active = "";
$color="#000";
 $sql = "SELECT challenge.*, 
                            typer.name AS typeName, 
                            typer.id AS type, 
                            areas.name AS areaName, 
                            regler.name AS reglerName
                    FROM challenge
                    LEFT JOIN typer
                        ON challenge.type = typer.id
                    LEFT JOIN areas
                        ON challenge.area = areas.id
                    LEFT JOIN regler
                        ON challenge.regler = regler.id
                    WHERE published = 1";
            $challenge = $conn->query($sql);
        echo "[";
            if ($challenge->num_rows > 0) {
                // output list of each row
                while($row = $challenge->fetch_assoc()) {
                        $chall = new challenge($row["id"],$conn,$row);
                        $area_id = $row["area"];
                        $area_name = $row["areaName"];
                        
                        if($chall->start_date <= $today && $chall->end_date >= $today ) {
                            $active = "AKTIV";
                            $color="#009933";
                        } else if($chall->start_date > $today) {
                            $active = "KOMMER";
                            $color="#ff9900";
                        } else if($chall->end_date < $today) {
                            $active = "AVSLUTTET"; 
                            $color="#cc0000";
                        }

                        $start_date = date("d/m-Y", strtotime($chall->start_date));
                        $end_date = date("d/m-Y", strtotime($chall->end_date));
                        if($chall->type_id == 1) {
                               $date = "Ingen tidbegrensning";

                        } else {
                            $date = $start_date . " - " .  $end_date;
                        }
    
                    
                     echo  "{ \"name\": \"" .       $chall->name        . "\", 
                            \"dates\": \"" .        $date               . "\",
                            \"area_id\": \"" .      $area_id            . "\",
                             \"area_name\": \"" .   $area_name          . "\",
                             \"path\": \"" .        $chall->path        . "\",
                             \"description\": \"" . $chall->description . "\",
                             \"active\": \"" .      $active             . "\",
                              \"color\": \"" .      $color              . "\",
                              \"image\": \"" .      $chall->image       . "\"},";
                        
                }
                echo "{\"name\":\"last\"}]";
            } else {
               echo "[{ \"error\": \"null challanges\" }]";
            }

?>