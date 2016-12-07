<?php
include "../header.php";
?>


<?php

    function dropdown($table,$col,$index = NULL) {
        global $conn;
        $sql = "SELECT * FROM ".$table;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                if($row["id"]==$index) $sel = "SELECTED";
                else $sel = "";
                echo "<option value=" . $row["id"] . " " . $sel .">" . $row[$col] . "</option>";
            }
        }
    }

if(!$currentUser->isAdmin()) {
    header("Location: index.php");
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
                                    <td><a href="admin.php">1. Velg</a></td>
                                    <td class="active">2. Gjør endringer</td>
                                    <td>
                                        <?php if(isset($_GET["id"]) ) { ?>
                                            <a href="segmentedit.php?id=<?php echo $_GET["id"]; ?>">3. Administrer segmenter</a>
                                        <?php } else { ?>
                                            3. Administrer segmenter
                                        <?php } ?>
                                    </td>
                                    </tr></table>

                      </div>
                    </div>
                <div class="row">
                      <div class="col-sm-12">
                          <!-- Kolonne 1 -->
                        <div class="card">
                            <div class="card-header">Info</div>
                            <div class="card-block">
                                <p class="card-text">Det er to typer regler som kan brukes. <strong>Individuell</strong> betyr at segmentene kan løpes hver for seg, og når som helst innenfor det angitte tidsintervallet. Mens ved reglene <strong>sammenhengende</strong> må segmentene løpes og logges på samme aktivitet.</p>
                                <p class="card-text"><i>Det er ingen opplastningsmulighet for bakgrunnsbilder ennå. Bilde må sendes på mail til <a href="mailto:torbjorn.hovde@gmail.com">admin</a></i></p>
                            </div>
                        </div>
                      </div>
                    </div>
    <?php if(isset($_GET["id"]) ) {
            $challenge_id = $_GET["id"];?>
           

                <?php
                $sql = "SELECT * FROM challenge WHERE id=".$challenge_id;
                $challenge = $conn->query($sql);

                if ($challenge->num_rows > 0) {
                    // output data of each row
                    while($row = $challenge->fetch_assoc()) {

                                $id = $row["id"];
                                $name = $row["name"];
                                $add_description = $row["description"];
                                $typer = $row["type"];
                                $regler = $row["regler"];
                                $area = $row["area"];

                                //$type_id = intval($row["typeID"]);
                                // henter ut challenge-periode
                                $start_date = date("Y-m-d", strtotime($row['start_date']));
                                $end_date = date("Y-m-d", strtotime($row['end_date']));
                        
                                $image = $row["image"];
                                $checked="";
                                if(intval($row["published"])==1) $checked="CHECKED";
                              
                                
                        
                        ?>
         
                    <h3>Endre -> <?php echo $name; ?> </h3>
                    <?php if( isset($_GET["msg"]) ) echo "<p style='color:#038803'>".$_GET["msg"]."</p>";?>
                    <form role="form" method="POST" action="update.php?id=<?php echo $id ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Navn: </label>
                            <input class="form-control input-lg" value="<?php echo $name; ?>" type="text" name="navn" />
                        </div>
                        <div class="form-group">
                            <label>Tidsinterval: </label>
                            <select class='form-control' name='typer' id="formtyper">;
                                <?php dropdown("typer","name",$typer);?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Regler: </label>
                            <select class='form-control' name='regler' id="formtyper">;
                                <?php dropdown("regler","name",$regler);?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Område: </label>
                            <select class='form-control' name='area' id="formtyper">;
                                <?php dropdown("areas","name",$area);?>
                            </select>
                        </div>
                        
                        <div class="form-group" id="formdate">
                            <label>Startdato: </label>
                            <input id="startdate" class="form-control input-lg" value="<?php echo $start_date; ?>" type="date" name="startdato" />
                            <label>Sluttdato: </label>
                            <input id="enddate" class="form-control input-lg" value="<?php echo $end_date; ?>" type="date" name="sluttdato" />
                        </div>
                        
                        <div class="form-group">
                            <label>Beskrivelse: </label>
                            <textarea class="form-control input-lg" rows="5" name="description"><?php echo $add_description; ?></textarea>
                        </div>
                      
                        <div class="form-group">
                            <label>Bildefil: </label><br />
                            <img src="<?php echo "/images/".$image; ?>" width="100"/>
                            <input class="form-control input-lg file"    type="file" name="bilde" />
                            
                           
                        </div>
        
                        <div class="form-group">
                            <label>Publisert: </label>
                            <input class="form-control input-lg" value="yes" type="checkbox" name="publisert" <?php echo $checked ?>/>
                        </div>
                        <div class="form-group">
                            <input type="submit" />
                        </div>
                    </form>

                        <?php


                        }

                    } else {
                        echo "0 challenge results";
                    }
        // end if ID (edit)
                } else {
                    // start ADD
                ?>
                    <h3>Legg til ny</h3>
                    <form role="form" method="POST" action="update.php">
                        <div class="form-group">
                            <label>Navn: </label><input class="form-control input-lg" type="text" name="navn" />
                        </div>
                        <div class="form-group">
                            <label>Tidsinterval: </label>
                            <select class='form-control' name='typer' id="formtyper">;
                                <?php dropdown("typer","name");?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Regler: </label>
                            <select class='form-control' name='regler' id="formtyper">;
                                <?php dropdown("regler","name");?>
                            </select>
                        </div>
                        
                        <div class="form-group" id="formdate">
                            <label>Startdato: </label>
                            <input id="startdate" class="form-control input-lg"  type="date" name="startdato" />
                            <label>Sluttdato: </label>
                            <input id="enddate" class="form-control input-lg"  type="date" name="sluttdato" />
                        </div>
                        <div class="form-group">
                            <label>Beskrivelse: </label>
                            <textarea class="form-control input-lg" rows="5" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Bildefil: </label><input class="form-control input-lg" type="text" name="bilde" />
                        </div>
                        <div class="form-group">
                            <input class="form-control input-lg" type="submit" />
                        </div>
                        


                    </form>

                <?php
                    
                }
                
$conn->close();
include "adminfooter.php";

 } // end if admin_id (logged in)   


    
?>