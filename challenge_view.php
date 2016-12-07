<script>
var filterData = "all";
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {

        var sex = data[3];
 
        if ( sex == filterData || filterData == "all")
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    
    var table = $('#effort').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input

    $("#filter_all").click(function(event){
       event.preventDefault();
        filterData = "all";
        table.draw();
   });
    $("#filter_m").click(function(event){
       event.preventDefault();
        filterData = "M";
        table.draw();
   });
 $("#filter_w").click(function(event){
       event.preventDefault();
        filterData = "F";
        table.draw();
   });
     
    $(".toggle-map-link").click(function(event){
       event.preventDefault();
   });
} ); 
    
 function toggleMap(str) {
     $(str).toggle();
 }    
    
</script>
<?php

// array search
function searchForId($id, $array) {
$pos=0;
   foreach ($array as $key => $val) {
       $pos++;
       //echo $val['id'] ."===". $id . "<br";
       if (intval($val['id']) === intval($id)) {
           return array("pos"=>$pos,"key"=>$key);
       }
   }
   return null;
}

// funksjon for å telle antall forsøk per segment per dag
function effortCount($id) {
    global $conn;     
    $result = $conn->query("SELECT count(*) AS total FROM efforts WHERE segment_id=".$id." AND start_date >=  NOW() - INTERVAL 1 DAY");
   

    $data = $result->fetch_assoc();
    return $data["total"];

}
function allTimeSegmentPR($seg_id) {

    global $currentUser;
    global $api;
    

    $string    = "segments/".$seg_id."/leaderboard";
    $leader   = $api->get($string,array("per_page" => 1));
    $first="";
    $me="";
    if( !($currentUser->isStravaUser()) ) $me = "Du: <i>ikke logget inn</i>";
    else $me = "Du: <i>ingen plassering</i>";
    foreach ($leader->entries as $item) {
        if($item->rank == 1) $first = "CR: " . $item->athlete_name . ": " .gmdate('H:i:s',  $item->elapsed_time);
        if(intval($item->athlete_id) == $currentUser->id) $me = "Du: " .gmdate('H:i:s',  $item->elapsed_time). " (#". $item->rank.")";
        
        
    }
    return array("first"=>$first,"me"=>$me);
}

if(strlen($challenge_path)<=0) $challenge_id= $_GET["id"];

global $root_path;
$chall = new challenge($challenge_id,$conn,$root_path);
global $currentUser;



if($chall->published || $currentUser->admin_role==1) {
    echo "<script>document.body.style.backgroundImage = 'url(".$root_url."images/$chall->image)';</script>"; // setter bakgrunnsbilde på pubiserte challenges
?>

    <!-- ****************************************************** -->
    <!-- ********************  INFOBOKSER ********************** -->
    <!-- ****************************************************** -->
<header>
    <div style="margin-top: 150px;margin-bottom: 50px;">
    <h1 style="float:left;"><?php echo $chall->name ?></h1>
    <div  style="margin: 10 0 0 20px;float:left;" class="fb-share-button" data-href="<?php echo $page_path; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page_path); ?>&amp;src=sdkpreparse">Del</a></div>

    <div style="font-size:16px;margin-top:-50px;margin-bottom:50px; clear:both;">
        <span class="tag tag-info">Totallengde: <?php echo $chall->segmentTotalDistance;?> meter</span>
        <span class="tag tag-info">Høydemeter: <?php echo $chall->segmentTotalElevation;?> meter</span>
        
    </div>
    </div>

    
</header> 
    <p style=" clear:both;font-size:26px;"><span class="tag tag-warning">
        <?php 
            setlocale(LC_ALL,"nb_NO.UTF8");
            //setlocale(LC_TIME, 'nb_NO', 'Norwegian_Norway', 'Norwegian');
            if($chall->type_id==1) {
                echo "Ingen tidsbegrensing";
            } else {    
                echo strftime("%d. %B %Y",strtotime($chall->start_date)) . " - " .strftime("%d. %B %Y",strtotime($chall->end_date));
            }
    ?>
        </span>

<span class="tag tag-warning">
        <?php 
                    if($chall->regel_id==1) echo "Segmentene kan løpes individuelt";
                    else if($chall->regel_id==2) echo "segmentene må løpes på samme aktivitet!";
                    
                   
                ?>

        </span>
</p>




    <!-- Første rad -->
    <div style="clear:both;" class="row">
        <!-- Kolonne 2 -->
           <div class="col-sm-12"><div class="card-columns">
<?php  for($x = 0; $x < $chall->segmentCounter; $x++) { ?>

<div class="card">
  <div class="card-block">
   <h6 class="card-header">
        <a  target="_blank" href="https://www.strava.com/segments/<?php echo  $chall->segmentData[$x]->id;  ?>"><?php echo  $chall->segmentData[$x]->name;  ?></a>
        <p style="color:#666; font-size:12px;margin-top:5px;margin-bottom:0;">
            <?php echo $chall->segmentData[$x]->distance;?> m | <?php echo $chall->segmentData[$x]->elevation; ?> hm | Forsøk siste 24 t: <?php echo effortCount($chall->segmentData[$x]->id); ?>
        </p>
       <p class="toggle-map" style="float:right; font-size:12px; margin-bottom:-10px;"><a class="toggle-map-link" href="#" onclick="toggleMap('#map<?php echo $chall->segmentData[$x]->id ?>');">vis kart</a></p>
      </h6>
                   
                        <div class="map-field" id="map<?php echo $chall->segmentData[$x]->id ?>"></div>

                        <script type="text/javascript">

                            (function () {
                                'use strict';

                                var map = L.map('map<?php echo $chall->segmentData[$x]->id ?>',{
                                    scrollWheelZoom: false,
                                    touchZoom:false
                                });
                                L.tileLayer.kartverket('topo2').addTo(map);

                                var gpx = '<?php echo $root_url ?>gpx/<?php echo $chall->segmentData[$x]->id.".gpx"; ?>';
                               
                                var options = {
                                    async: true,
                                    marker_options: {
                                        startIconUrl: '<?php echo $root_url ?>lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-start.png',
                                        endIconUrl: '<?php echo $root_url ?>lib/Baertur-master/assets/lib/leaflet-gpx/pin-icon-end.png',
                                        shadowUrl: '<?php echo $root_url ?>lib/Baertur-master/assets/lib/leaflet-gpx/pin-shadow.png'
                                    }
                                };

                                new L.GPX(gpx, options).on('loaded', function(e) {
                                    map.fitBounds(e.target.getBounds(),  {padding: [10,30]}   );
                                    
                                }).addTo(map);
                            }());

                        </script>     
                    <p style="font-size:10px;" class="card-text">
                        <strong>All time</strong>: 
                    <?php
                      $alltime = allTimeSegmentPR($chall->segmentData[$x]->id); 

                      echo  $alltime["first"]." | ";
                      echo  $alltime["me"];


                    ?>
                   </p>
  </div>
</div><p></p>
       
        
        
   <?php } ?> 
               
        </div>
</div>
</div>
<?php
    

$finals = $chall->createTableAndCache();

//$lastupdate = $chall->getJsonTime();
$lastupdate = $chall->getJsonTimeAjax("#tid");
  
if($lastupdate==NULL){
    $update_output = "";
} 
else {
    
    $t =  floor( ((3600 * 0.5) - (time() - $lastupdate ) ) / 60);
   // if($t > 0) $update_output = "(neste oppdatering om $t minutter)";
//    else $update_output = "(neste oppdatering om 0 minutter)";
    
    //$update_output = " (sist oppdatert: " . date('H:i', $lastupdate) . ")";
    $update_output = "<span id='tid'></span>";
}

 
    
?>

    <!-- STARTER TABELL -->    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <small>Tabellen oppdateres hver halvtime. <?php echo $update_output; ?></small>
                    
                    <span style="float:right"><a id="filter_all" href="#">Alle</a> |  <a id="filter_m" href="#">Menn</a> |  <a  id="filter_w" href="#">Damer</a></span>
                    
                    <!-- *VARSELKNAPP -->
                    <?php if( $currentUser->isStravaUser() ) { ?>
                        
                        <div style="float:right;margin-right:25px;">
                        <button id="varsler"  type="button" 
                                class="btn <?php echo  $currentUser->getEmailAlertClass($currentUser->checkEmailAlert($chall->id)); ?>" 
                                data-toggle="button" aria-pressed="false" autocomplete="off"><?php echo  $currentUser->getEmailAlertText($currentUser->checkEmailAlert($chall->id)); ?></button>
                            <p style="font-size:9px;margin:0;">bli varslet ved ny plassering</p>
                            </div>
                                
                    <?php } ?>
                     <!-- *SLUTT VARSELKNAPP -->
                </div>
                <div class="card-block">
                 
                    
   
    <?php echo $lastupdate;  ?>
        <table id="effort" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th rowspan="2">#</th>
                    <th rowspan="2">Fornavn</th>
                     <th rowspan="2">Etternavn</th>
                    <th rowspan="2">Kjønn</th>
                    <th colspan="<?php echo $chall->segmentCounter;?>">Segmenter <small>(antall forsøk i parentes)</small></th>
                    <th rowspan="2">Total</th>
                </tr>
                <tr>
                   <?php  for($x = 0; $x < $chall->segmentCounter; $x++) { ?>
                    <th style="font-size:10px;font-weight:lighter;"><?php echo $chall->segmentData[$x]->name; ?></th>
                    <?php } ?>
                    
                </tr>  
            </thead>
            <tbody>
            <?php
                $plassering = 0;
                foreach($finals as $row) {
                    $plassering++;
                    $complete = true;
                    $s = array();
                    for($x=0;$x < $chall->segmentCounter;$x++) {
                        $sec=intval($row["effort".$x]["seconds"]);
                        $e_id = $row["effort".$x]["id"];
                        $a_id = $row["effort".$x]["activity_id"];

                        if($sec > 0) {
                            $s[$x] = gmdate('H:i:s', $sec);
                           if($a_id != '') {
                             // $s[$x] = "<a target='_blank' href='https://www.strava.com/activities/".$a_id . "/segments/".$e_id."'>" . $s[$x] . "</a>";
                               $bt = urlencode("https://www.strava.com/activities/".$a_id . "/segments/".$e_id);
                               $s[$x] = "<a href='#'  data-html='true' data-poload='/pop.php?aid=".$row["id"] ."&sid=".$chall->segmentData[$x]->id."&sd=".$chall->start_date."&ed=".$chall->end_date."&bt=".$bt."' data-trigger='focus'  title='Top 5 forsøk'>" . $s[$x] ."</a>";
                           }
                        } else {
                            $s[$x] = "-"; 
                            $complete = false;
                        }

                    } // end for

                    if($row["total"] == "") {$plass="-"; $row["total"] = "-";}
                    else { $plass=$plassering; }
                    $count=array();
                    for($j = 0; $j < $chall->segmentCounter; $j++) { 
                        $count[$j] = "";
                        if(intval($row["effort".$j]["count"]) > 0) $count[$j] = " (" . intval($row["effort".$j]["count"]).") ";
                    }
              
                    if($currentUser->isStravaUser() && intval($row["id"]) == $currentUser->id ) {
                        $bold="style='font-weight:bold;'";
                        $currentUser->setChallengeCurrentPosition($plassering);
                    } else {
                        $bold="";
                    }
                    echo "<tr>
                            <td $bold >" .   $plass          .   "</td>
                            <td $bold >" .   $row["fname"]   .   "</td>
                            <td $bold >" .   $row["lname"]   .   "</td>
                            <td $bold >" .   $row["sex"]   .   "</td>";
                    
                    for($j = 0; $j < $chall->segmentCounter; $j++) { 
                        echo "<td $bold class='desktop'>"   .   $s[$j]           .   $count[$j] . "</td>";
                     }
                            
                    echo "<td $bold>"                   .   $row["total"]   .   "</td>
                        </tr>";

                    //if($plassering >=100 ) break;
                }

            ?>
            </tbody>
        </table> 
        </div>
    </div>
    </div>
    </div>

<?php if( $currentUser->isAdmin() ) { ?>
    <script>
        /* VARSELKNAPP*/
        $("#varsler").click(function(){
            var on = '<?php echo  $currentUser->getEmailAlertText(true); ?>';
            var off = '<?php echo  $currentUser->getEmailAlertText(false); ?>';
            if( !($(this).text() == off) ) {
                $(this).prop('disabled', true);

                $.ajax({
                    url: '/emailoff.php',
                    type: 'get',
                    data: { "cid": "<?php echo $chall->id; ?>"},
                    success: function(response) { 
                        $("#varsler").prop('disabled', false);
                        $("#varsler").text(off);
                        $("#varsler").removeClass("btn btn-success").addClass("btn btn-primary");
                       //console.log(response); 
                    }
                });

            } else {
                $(this).prop('disabled', true);

                $.ajax({
                    url: '/emailon.php',
                    type: 'get',
                    data: { "cid": "<?php echo $chall->id; ?>",
                            "pos": <?php echo $currentUser->challengeCurrentPosition; ?>},
                    success: function(response) { 
                        $("#varsler").prop('disabled', false);
                        $("#varsler").text(on);
                        $("#varsler").removeClass("btn btn-primary").addClass("btn btn-success");
                       //console.log(response); 
                    }
                });
            }
        });
    </script>
<?php } ?>


<?php
  } else {
    ?>
    <p style="margin-top:150px">Utfordringen er ennå ikke publisert</p>
   
    <?php
    
}

?>