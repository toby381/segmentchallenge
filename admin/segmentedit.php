<?php
include "../header.php";



if(!$currentUser->isAdmin()) {
    header("Location: ../index.php");
die();
} else {
   
    $today = date("Y-m-d", strtotime(date("Y-m-d")));
    $active = "";
    $color="#000";
    if(isset($_GET["id"]) ) {
            $challenge_id = $_GET["id"];
    ?>
    <script>document.body.style.backgroundColor = '#eee';</script>



                <div class="row" style="margin-top:150px;">
                      <div class="col-sm-12">


                                <table class="step"><tr>
                                    <td><a href="admin.php">1. Velg</a></td>
                                    <td><a href="edit.php?id=<?php echo $_GET["id"] ?>">2. Gjør endringer</a></td>
                                    <td class="active">3. Administrer segmenter</td>
                                    </tr></table>

                      </div>
                    </div>
 <div class="row">
                      <div class="col-sm-12">
                          <!-- Kolonne 1 -->
                        <div class="card">
                            <div class="card-header">Info</div>
                            <div class="card-block">
                                <p class="card-text">Kopier hele lenken til segmentet fra Strava. Den ser sånn ut (<i>https://www.strava.com/segments/7739744</i>).</p>
                                <p class="card-text">Fjerner du et segment fra listen vil den ikke bli fjernet fra andre utfordringer med samme segment. Og når du resetter et segment vil alle efforts bli lastet inn på nytt fra Strava, det kan ta ca 24 timer før alle er hentet på nytt (henter 200 hver halvtime) </p>
                            </div>
                        </div>
                      </div>
                    </div>
                <div class="card-deck">
                    <div class="card">
                        
                         <div class="card-header">Legg til segment</div>
                         <div class="card-block">
                            <form method="POST" action="updatesegments.php?todo=add">
                                <label>Segment url (hele url): </label><br><input class="form-control input-lg" value="" type="text" name="url" />
                                <input value="<?php echo $challenge_id; ?>" type="hidden" name="challenge" />


                                <input class="form-control input-lg"  type="submit" />
                            </form>
                        </div>
                    </div>
                       <div class="card">
                        
                         <div class="card-header">Segment</div>
                         <div class="card-block">
    <table id="admin" class="display" cellspacing="0" width="100%">
            <!--<table style="margin-bottom:200px;" class='table'>  -->
                <tr><th>Segment ID</th><th>Navn</th><th>siste oppdatering</th><th>Fjern</th></tr>
<?php
           
                // Henter segmentdata
                $sql = "SELECT segments.name AS segName, 
                               segments.id AS segID,
                               segments.distance AS segDist,
                               segments.elevation AS segElev,
                               challenge_relation.last_update AS lastUpdate,
                               challenge_relation.page_update AS pageUpdate
                               FROM challenge_relation 
                                    JOIN segments
                                    ON challenge_relation.segment_id = segments.id
                                WHERE challenge_id=". $challenge_id; 
                $segments = $conn->query($sql);
                $seg_counter=0;
                $total_length=0;
                $total_elevation=0;
                if ($segments->num_rows > 0) {
                    while($row = $segments->fetch_assoc()) {
                        $seg_id[$seg_counter] = $row["segID"];
                        $seg_name[$seg_counter] = urldecode($row["segName"]);
                        $seg_distance[$seg_counter] = $row["segDist"];
                        $seg_elevation[$seg_counter] = $row["segElev"];
                        $last_update = $row["lastUpdate"];
                        $page_update = $row["pageUpdate"];


                        $total_length       += intval($seg_distance[$seg_counter]);
                        $total_elevation    += intval($seg_elevation[$seg_counter]);
                        ?>
                        <tr>
                            <td>
                                <?php echo $seg_id[$seg_counter]; ?>
                            </td> 
                            <td>
                                <a target=_blank href='https://www.strava.com/segments/<?php echo $seg_id[$seg_counter]; ?>'> <?php echo $seg_name[$seg_counter]; ?></a>
                            </td>
                            <td>
                                Tid: <br><small><?php echo  $last_update ?></small> <br> Side: <?php echo  $page_update ?> <br> (<a href="updatesegments.php?todo=reset&s_id=<?php echo $seg_id[$seg_counter]; ?>&c_id=<?php echo $challenge_id; ?>">reset</a>)
                            </td>
                            <td>
                                <a href='updatesegments.php?todo=delete&s_id=<?php echo $seg_id[$seg_counter]; ?>&c_id=<?php echo $challenge_id; ?>'>fjern (fra denne utfordringen)</a>
                            </td>
                        </tr>
                        <?php
                         $seg_counter++;
                    }
                } else {echo "no segments found..?";}
                              
                                
                        
                        ?>
                    </table>
                           </div></div></div>


            <?php
   
                }
  
$conn->close();
include "adminfooter.php";

 } // end if admin_id (logged in)   


    
?>