<?php include "db.php"; ?>
<table class="table-striped"><tr><th style="width:50px;">#</th><th style="text-align:right;width:120px;">Tid</th></tr>
<?php 
    
$aid = $_GET["aid"];
$sid = $_GET["sid"];
$start_date = $_GET["sd"];
$end_date = $_GET["ed"];
$bt = $_GET["bt"];
$counter=0;



$sql = "SELECT  efforts.id, 
                efforts.seconds, 
                efforts.athlete_id,
                efforts.activity_id
        FROM efforts 
        WHERE  efforts.segment_id=".$sid."
            AND  efforts.athlete_id=".$aid."
            AND efforts.start_date >='". $start_date ."'
            AND efforts.start_date <='". $end_date ."'
        ORDER BY efforts.seconds asc LIMIT 5";
          // echo $sql;
            
           $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                
                    while($row = $result->fetch_assoc()) {
                        $counter++;
                        echo "<tr><td>". $counter ."</td><td style='text-align:right;width:120px;'>".gmdate('H:i:s',  $row["seconds"])."</td></tr>";
                    }
            }
 
                         
                        

?>
    </table>
    <p>&nbsp;</p>
    <p><a href="<?php echo $bt ?>" target="_blank" class="btn btn-primary">Aktivitet på Strava</a></p>

<?php $conn->close(); ?>