
<script>document.body.style.backgroundColor = '#eee';</script>
<script>

    $(document).ready(function() {
        $('.nav-tabs .nav-item a').click(function(event){
            id = $(this).data('area');
            if(id==0) {
                $('.challenge').show();
            } else {
                $('.challenge').hide();
                $('.area_'+id).show();
            }
           


        });
    });


</script>
<div style="margin-top:150px;"></div>
<p class="card-text"><i>Har du lyst til å lage en egen utfordring? Send en PM på <a target="_blank" href="https://www.facebook.com/Segmentchallenge/">Facebook-siden</a></i></p>


<ul style="margin-bottom:5px;" class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a id="tab0" class="nav-link active" href="#profile" role="tab" data-toggle="tab" data-area="0">Alle</a>
    </li>  
<?php
    
  
            $sql = "SELECT * FROM areas";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                // output list of each row
                
                while($row = $result->fetch_assoc()) { 
                    
                   ?>
                    <li class="nav-item">
                        <a id="tab<?php echo $row["id"];?>" class="nav-link" href="#profile" role="tab" data-toggle="tab" data-area="<?php echo $row["id"];?>"><?php echo $row["name"]; ?></a>
                    </li>
                <?php 
                    
                }
            }
    
            ?>

</ul>
<?php 
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
        
            if ($challenge->num_rows > 0) {
                // output list of each row
                while($row = $challenge->fetch_assoc()) {
                        $chall = new challenge($row["id"],$conn,$row);
                        
                    
                        $area_id = $row["area"];
                        $area_name = $row["areaName"];
                        $list[$area_id]["id"] = $area_id;
                        $list[$area_id]["name"] = $area_name;
                        $list[$area_id]["challenge"][] = $chall;
                        
                }

            } else {
                echo "0 challenge results";
            }

      ?><div class="row"><div class="col-sm-12"><div class="card-columns"><?php
         foreach ($list as $area_item) { ?>
            
            <!--<h3><?php echo $area_item["name"]; ?></h3>-->
                

               

                <?php 
                foreach ($area_item["challenge"] as $challenge ) { 
                    if($challenge->start_date <= $today && $challenge->end_date >= $today ) {
                        $active = "AKTIV";
                        $color="#009933";
                    } else if($challenge->start_date > $today) {
                        $active = "KOMMER";
                        $color="#ff9900";
                    } else if($challenge->end_date < $today) {
                        $active = "AVSLUTTET"; 
                        $color="#cc0000";
                    }

                    $start_date = date("d/m-Y", strtotime($challenge->start_date));
                    $end_date = date("d/m-Y", strtotime($challenge->end_date));
                    if($challenge->type_id == 1) {
                           $date = "Ingen tidbegrensning";
 
                    } else {
                        $date = $start_date . " - " .  $end_date;
                    }

                ?>
                    
                    <div class="card area_<?php echo $area_item["id"]; ?> challenge">
                        <a href="challenge/<?php echo $challenge->path ?>">
                            <img class="card-img-top" src="<?php echo $root_url ?>images/<?php echo $challenge->image; ?>"  width="100%" />
                        </a>
                        
                       
                        <div class="card-block">
                             <h4 class="card-title">
                                <a href="challenge/<?php echo $challenge->path ?>"><?php echo $challenge->name ?></a> - <span style="font-size:13px; color:<?php echo $color ?>"><?php echo $active ?></span>
                            </h4>
                             <p style="font-size:10px;margin:0;"><br><?php echo $challenge->description; ?></p>
                        </div>
                            
                            
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="float:left; width:50%;"><?php echo $area_item["name"]; ?></li> 
                            <!--<li style="font-size:10px; float:left; width:50%;" class="list-group-item"><?php echo $challenge->regel_name; ?></li> -->
                            <li style="font-size:10px;float:left; width:50%; height:50px;" class="list-group-item"><?php echo $date; ?></li>  
                        </ul>
                                
                       
                    </div>
                    <p class="area_<?php echo $area_item["id"]; ?> challenge"></p> <p class="area_<?php echo $area_item["id"]; ?> challenge"></p>
                   
                   

                <?php } ?>


            
<?php } ?>
    </div></div></div> 
<div style="margin-bottom:150px;"></div>