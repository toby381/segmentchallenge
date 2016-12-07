<?php
include "../header.php";
//include "../class_lib.php";



if(!$currentUser->isAdmin()) {
    header("Location: ../index.php");
die();
} else {
    $today = date("Y-m-d", strtotime(date("Y-m-d")));
    $active = "";
    $color="#000";
    ?>
    <script>document.body.style.backgroundColor = '#eee';</script>
          <div class="row" style="margin-top:150px;">
                      <div class="col-sm-12">


                                <table class="step"><tr>
                                    <td  class="active">1. Velg</td>
                                    <td>2. Gjør endringer</td>
                                    <td>3. Administrer segmenter</td>
                                    </tr></table>

                      </div>
                    </div>
        <div class="card">
            <div class="card-header">Admin</div>
            <div class="card-block">
                <a class="btn btn-primary" href="edit.php">Legg til Utfordring</a>
            </div>
            <div class="card-block">
                <table id="effort" class="display" cellspacing="0" width="100%">
                <!--<table style="margin-bottom:200px;" class='table'>  -->
                    <tr><th>Navn</th><th>Område</th><th>Startdato</th><th>Sluttdato</th><th>Publisert</th><th>Status</th><th>Admin</th><th>Endre</th><th>Segmenter</th></tr>
                    <?php
                    $sql = "SELECT challenge.*, 
                                    typer.name AS type, 
                                    typer.id AS typeID,
                                    athletes.lastname AS lastName,
                                    athletes.id AS adminID,
                                    areas.name AS areaName
                            FROM challenge
                                LEFT JOIN typer
                                    ON challenge.type = typer.id
                                LEFT JOIN admin
                                    ON challenge.admin_id = admin.id
                                LEFT JOIN athletes
                                    ON admin.athlete_id = athletes.id
                                LEFT JOIN areas
                                    ON challenge.area = areas.id
                            ";
                    $challenge = $conn->query($sql);

                    if ($challenge->num_rows > 0) {
                        // output data of each row
                        while($row = $challenge->fetch_assoc()) {
                                    $chall = new challenge($row["id"],$conn,$row);



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


                                $chall->start_date = date("d/m-Y", strtotime($chall->start_date));
                                $chall->end_date = date("d/m-Y", strtotime($chall->end_date));
                                if($chall->type_id == 1) {
                                   $chall->start_date = "ingen tidsbegrensing"; 
                                    $chall->end_date = "";
                                }
                                ?>


                    <tr>
                        <td>
                            <a href="/challenge/<?php echo $chall->path ?>"><?php echo $chall->name ?></a><br>
                            <a href="/challenge/<?php echo $chall->path ?>"><small><i><?php echo $chall->clean_url ?></i></small></a>
                        </td>

                        <td><?php echo $chall->area_name; ?></td>
                        <td><?php echo $chall->start_date; ?></td>
                        <td><?php echo $chall->end_date;?></td>
                        <td><?php echo $chall->published;?></td>
                        <td style="color:<?php echo $color ?>"><?php echo $active ?></td>
                        <td><?php echo $chall->admin_name;?></td>
                        <?php if($chall->admin_id == $currentUser->id) {?>
                            <td><a href="edit.php?id=<?php echo $chall->id ?>">Endre</a></td>
                            <td><a href="segmentedit.php?id=<?php echo $chall->id ?>">Segment</a></td>
                        <?php } else { ?>
                            <td><i>ikke tilgang</i></td>
                            <td><i>ikke tilgang</i></td>
                        <?php } ?>
                    </tr>

                                    <?php

                            }

                        } else {
                            echo "0 challenge results";
                        }
                    ?>

                </table>
            </div>
        </div>



<?php 
  
$conn->close();
include "adminfooter.php";

 } // end if admin_id (logged in)   


    
?>