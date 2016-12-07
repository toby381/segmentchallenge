<?php 
	class challenge 
    {
        public  $id;
        private $conn;
        private $root_path;
        public  $segmentData = array();
        public  $segmentTotalDistance;
        public  $segmentTotalElevation;
        public  $segmentCounter;
        public  $published;
        private $finals = array();
        
        
        public $name;
        public $description;
        public $image; 
        public $type_id; 
        public $type_name;
        
        public $regel_id;
        public $regel_name;
        public $start_date;
        public $end_date;
        public $path;
        public $cacheFile;
        public $fileURL;
        public $admin_name;
        public $admin_id;
        public $area_name;
        public $clean_url;
        
        function __construct($challenge_id,$dbconnection, $root_path,array $arrayInit = null) {
            $this->conn = $dbconnection;
            $this->id =  $challenge_id;
            $this->root_path =  $root_path;
            
			if(is_null($arrayInit)) {
                $this->initChallenge();
                $this->initSegments();
            } else {
                $this->initChallengeFromArray($arrayInit);
            }
		}
        
        private function initChallengeFromArray($row) {
   
                    if( isset($row["name"]) ) $this->name = $row["name"];
                    if( isset($row["image"]) ) $this->image = $row["image"];
                    if( isset($row["description"]) ) $this->description = $row["description"];
                    if( isset($row["image"]) ) $this->image = $row["image"];
                    if( isset($row["type"]) ) $this->type_id = $row["type"];
                    if( isset($row["typeName"]) ) $this->type_name = $row["typeName"];
                    if( isset($row["regler"]) ) $this->regel_id = intval($row["regler"]);
                    if( isset($row["reglerName"]) ) $this->regel_name = $row["reglerName"];
                    if( isset($row["path"]) ) $this->path = $row["path"];
                    if( isset($row["path"]) ) $this->cacheFile = $cache_file = getcwd() . '/cache/cache_'.$this->path.'.php';
                    if( isset($row["path"]) ) $this->fileURL = "http://segmentchallenge.lopsloggen.no/challenge/". $this->path;
                    if( isset($row["published"]) ) $this->published =$row["published"];
                    if( isset($row["lastName"]) ) $this->adminName =$row["lastName"];
                    if( isset($row["adminID"]) ) $this->admin_id=$row["adminID"];
                    if( isset($row["areaName"]) ) $this->area_name=$row["areaName"];
                    if( isset($row["path"]) ) $this->clean_url = "http://segmentchallenge.lopsloggen.no/" . "challenge/" . $this->path;

                    
                    // henter ut challenge-periode
                   if( isset($row['start_date']) )  $this->start_date = date("c", strtotime($row['start_date']));
                    if( isset($row['end_date']) ) $this->end_date = date("c", strtotime($row['end_date']));
            
            
            
            
        }
        
        private function initChallenge() {
            $result = $this->conn->query("SELECT * FROM challenge WHERE id=". $this->id);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->published = $row["published"];
                //if($admin_id) $published=1;
                //if($this->published) {
                    //$id = $row["id"];
                    $this->name = $row["name"];
                    $this->description = $row["description"];
                    $this->image = $row["image"];
                    $this->type_id = $row["type"];
                    $this->regel_id = intval($row["regler"]);
                    $this->path = $row["path"];
                    $this->cacheFile = $cache_file = getcwd() . '/cache/cache_'.$this->path.'.php';
                    $this->fileURL = $page_path = "http://segmentchallenge.lopsloggen.no/challenge/". $this->path;

                    
                    // henter ut challenge-periode
                    $this->start_date = date("c", strtotime($row['start_date']));
                    $this->end_date = date("c", strtotime($row['end_date']));
               // } // end if published
            
            } else {
                echo "0 challenge results";
            }
        }
        
        private function initSegments() {
            $counter = 0;
            $total_length=0;
            $total_elevation=0; 
            // Henter segmentdata
            $sql = "SELECT segments.name AS segName, 
                           segments.id AS segID,
                           segments.distance AS segDist,
                           segments.elevation AS segElev
                           FROM challenge_relation 
                                JOIN segments
                                ON challenge_relation.segment_id = segments.id
                            WHERE challenge_id=". $this->id; 
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $seg = new segment();
                    $seg->setValues(array(
                        "id"        => $row["segID"],
                        "name"      => urldecode($row["segName"]),
                        "distance"  => $row["segDist"],
                        "elevation" => $row["segElev"]
                    ));
                    $this->segmentData[$counter] = $seg;



                    $total_length       += intval($row["segDist"]);
                    $total_elevation    += intval($row["segElev"]);

                    $counter++;
                }
                $this->segmentCounter = $counter;
                $this->segmentTotalDistance = $total_length;
                $this->segmentTotalElevation = $total_elevation;
            } else {echo "no segments found..?";}
            
        }
        
        private function tableCreateNewAthlete($pos, $id,$fn,$ln,$sex,$activity) {
            $this->finals[$pos] = array(
                            "id" => $id,
                            "fname" => $fn,
                            "lname" => $ln,
                            "sex"=> $sex,
                            "activity_id" => $activity,
                            "total" => "",
                            "col_count" => 1
                        );
        }
         private function tableIncreaseAthleteColCount($pos) {
              $this->finals[$pos]["col_count"]++;
         }
         private function tableCreateNewSegmentEffort($pos, $eff, $id = "",$activity = "",$sec = "",$count = "") {
             $this->finals[$pos]["effort".$eff] = array(
                                        "id" => $id,
                                        "activity_id" => $activity,
                                        "seconds" => $sec,
                                        "count" => $count);
         }
        private function importEffortGroupByAthlete($col) {
                       $sql = "SELECT *, count(seconds) AS effCount FROM 
                        (SELECT
                        efforts.id, 
                        efforts.seconds, 
                        efforts.athlete_id,
                        efforts.activity_id, 
                        athletes.firstname AS athlete_fname, 
                        athletes.lastname AS athlete_lname,
                        athletes.sex AS sex
                        FROM efforts 
                            JOIN athletes
                                ON efforts.athlete_id = athletes.id 
                        WHERE  efforts.segment_id=".$this->segmentData[$col]->id."
                            AND efforts.start_date >='". $this->start_date ."'
                            AND efforts.start_date <='". $this->end_date ."'
                        ORDER BY efforts.athlete_id, efforts.seconds asc) 
                    x GROUP BY athlete_id ORDER BY seconds asc";
           //echo $sql;
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $a_id = $row['athlete_id'];
                      $e_id = $row['id'];
                      $activity_id = $row['activity_id'];
                      $a_fn = $row['athlete_fname'];
                      $a_ln = $row['athlete_lname'];
                      $sex = $row["sex"];
                      $a_s = $row['seconds'];
                      $effCount =  $row['effCount'];

                    // Sjekker om atlet har fått egen rad opprettet, legger så til segmnet-resultat i riktig kolonne
                    $hit=false; 
                    for($x = 0; $x < count($this->finals); $x++) {
                        if($this->finals[$x]["id"] == $a_id) {
                            $hit=true;
                            $this->tableCreateNewSegmentEffort($x,$col,$e_id,$activity_id,$a_s,$effCount);
                            $this->tableIncreaseAthleteColCount($x);

                        }
                     }
                    // Oppretter ny rad for atlet som ikke ennå har egen rad....
                    if($hit == false) {
                        $this->tableCreateNewAthlete($x,$a_id,$a_fn,$a_ln,$sex,$activity_id);
                        
                            // .....oppretter blanke segmenter for ny atlet
                        for($j = 0; $j < $this->segmentCounter; $j++) { 
                           $this->tableCreateNewSegmentEffort($x,$j);
                        }
                        // ... fyller inn for aktuelt segment for ny atlet
                        $this->tableCreateNewSegmentEffort($x,$col,$e_id,$activity_id,$a_s,$effCount);
                    
                    } // end if $hit
                } // end while
            } // end if result
            
        }
         private function importEffortGroupByActivity() {
             $where = "";
            for($i=0;$i<$this->segmentCounter;$i++) {
                if($i==0) $where .= "efforts.segment_id=". $this->segmentData[$i]->id;
                else $where .= " OR efforts.segment_id=". $this->segmentData[$i]->id;
            } 
             $sql = "SELECT
                        efforts.id, 
                        efforts.seconds, 
                        efforts.athlete_id,
                        efforts.activity_id, 
                        efforts.segment_id,
                        athletes.firstname AS athlete_fname, 
                        athletes.lastname AS athlete_lname,
                        athletes.sex
                        FROM efforts 
                            JOIN athletes
                                ON efforts.athlete_id = athletes.id 
                        WHERE (" . $where . ") 
                            AND efforts.start_date >='". $this->start_date ."'
                            AND efforts.start_date <='". $this->end_date ."'
                        ORDER BY efforts.activity_id";
            //echo $sql;
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                      $a_id = $row['athlete_id'];
                      $s_id = $row['segment_id'];
                      $e_id = $row['id'];
                      $activity_id = $row['activity_id'];
                      $a_fn = $row['athlete_fname'];
                      $a_ln = $row['athlete_lname'];
                      $sex = $row["sex"];
                      $a_s = $row['seconds'];
                      $effCount =  "";
                    
                    $i=0;
                    for($j = 0; $j <= $this->segmentCounter; $j++) {
                        if($s_id == $this->segmentData[$j]->id) {
                            $i = $j;
                            break;
                        }
                    }    
                        
                    // Sjekker om aktivitet har fått egen rad opprettet, legger så til segmnet-resultat i riktig kolonne
                    $hit=false; 
                    for($x = 0; $x < count($this->finals); $x++) {
                        if($this->finals[$x]["activity_id"] == $activity_id) {
                            $hit=true;
                            $this->tableCreateNewSegmentEffort($x,$i,$e_id,$activity_id,$a_s,$effCount);
                            $this->tableIncreaseAthleteColCount($x);

                        }
                     }
                    // Oppretter ny rad for aktivitet som ikke ennå har egen rad....
                    if($hit == false) {
                        $this->tableCreateNewAthlete($x,$a_id,$a_fn,$a_ln,$sex,$activity_id);
                        // .....oppretter blanke segmenter for ny aktivitet
                        for($j = 0; $j < $this->segmentCounter; $j++) { 
                            $this->tableCreateNewSegmentEffort($x,$j);
                        }
                        // ... fyller inn for aktuelt segment for ny aktivitet
                        $this->tableCreateNewSegmentEffort($x,$i,$e_id,$activity_id,$a_s,$effCount);
                    } // end if $hit
                } // end while
            } // end if result
            

         }
        
        // sorterer etter total
        private function sortArray( $data, $field ) {
            $field = (array) $field;
            uasort( $data, function($a, $b) use($field) {
                $retval = 0;
                foreach( $field as $fieldname ) {
                    if( $retval == 0 ) $retval = strnatcmp( $a[$fieldname], $b[$fieldname] );
                }
                return $retval;
            } );
            return $data;
        }
        
        private function calculateTableTotals() {
                // Kalkulerer total
            for($k=0;$k < count($this->finals);$k++) {
                $this->finals[$k]["col_count"] = $this->finals[$k]["col_count"] - $this->segmentCounter; // finner ut hvor mange som mangler
                $nototal=false;
                $s_total = 0;
                for($j = 0; $j < $this->segmentCounter; $j++) { 
                    if((intval($this->finals[$k]["effort".$j]["seconds"]) == 0)) $nototal=true;
                }

                if( $nototal ) {
                    $s_total = 9999999999;// legger tomme nederst
                } else {
                    for($j = 0; $j < $this->segmentCounter; $j++) { 
                        $s_total += intval($this->finals[$k]["effort".$j]["seconds"]);
                    }
                    $s_total = gmdate('H:i:s',  $s_total);
                }

                $this->finals[$k]["total"] = $s_total;    

            }

        }
        private function emptyTableBlankTotals() {
            
            // endrer tomme tilbake til blank
            for($k=0;$k < count($this->finals);$k++) {

                if($this->finals[$k]["total"] == 9999999999) $this->finals[$k]["total"] = "";    

            }
    
        }
        private function removeDoubleAthlete() {
            // fjerner doble athleter
            for($k=0;$k < count($this->finals);$k++) {
                for($l=0;$l < count($this->finals);$l++) {
                    if($k < count($this->finals) && $l< count($this->finals) ) {
                        if( ($k != $l) && ($this->finals[$k]["id"] == $this->finals[$l]["id"]) ) {
                             if($this->finals[$k]["total"] <= $this->finals[$l]["total"]) array_splice($this->finals,$l,1);
                             else array_splice($this->finals,$k,1);
                        }
                    }
                }
             
            }
        }
        
        public function createTable() {
            if($this->regel_id == 1) {
                for($i=0;$i<$this->segmentCounter;$i++) {
                    $this->importEffortGroupByAthlete($i);
                } 
   
    
            } else if($this->regel_id == 2) {
                $this->importEffortGroupByActivity();

            }
            $this->calculateTableTotals();
            $this->finals = $this->sortArray( $this->finals, array('total','col_count') );
            if( $this->regel_id == 2) $this->removeDoubleAthlete();
            $this->emptyTableBlankTotals();
            
            return $this->finals;
        }
        private function getJsonFilePath() {
            $json_file = getcwd() ."/cache/". $this->path . ".json";
            return $json_file;
            
        }
        public function getJsonTime() {
            $json_file = $this->getJsonFilePath();
            if (file_exists($json_file)) { // is there a cache file?
                    $t = filemtime($json_file);
                    return $t;
            }
            return NULL;
            
        }
         public function getJsonTimeAjax($id) {  
            $json_file = $this->getJsonFilePath();
            $str = "<script>" .
            "var xhr = $.ajax({" .
            "url: '" .$this->root_path. "cache/". $this->path . ".json'," .
            "success: function(response) {" .
                "var d = new Date( xhr.getResponseHeader('Last-Modified') );" .
                "var datetext=d.getHours()+':'+d.getMinutes();".
                "$('". $id ."').html('Sist oppdatert: ' + datetext);" .
            "}" .
            "});" .
            "</script>";
             return $str;
         }
        
         public function updateCache() {
             $json_file = $this->getJsonFilePath(); 
             $arr = $this->createTable();
             file_put_contents($json_file,json_encode($this->finals));
             $this->updateHTMLcache();
             return  $arr;
         } 
        private function updateHTMLcache() {
            	$string = file_get_contents($this->fileURL);
	           $f = fopen($this->cacheFile, 'w');
	           fwrite ($f, $string, strlen($string));
	           fclose($f);
        }
         public function getTableFromCache() {
             $json_file = $this->getJsonFilePath();
             $arr2 = json_decode(file_get_contents($json_file), true); // read the content from cache
             return $arr2; 
         }
         public function createTableAndCache() {
            $json_file = $this->getJsonFilePath();
            if (file_exists($json_file)) { // is there a cache file?
                    $timedif = (time() - filemtime($json_file)); // how old is the file?
                     if ($timedif < 3600 * 0.5) { // get a new file 30 min
                         $this->finals = $this->getTableFromCache();
                     } else { // create a new cache file
                         $this->finals =$this->updateCache();
                    }
            } else { // no file? create a cache file
                     $this->finals = $this->updateCache();
            }
            return $this->finals;
        }
 
	} // end challenge class




class segment 
    {
    public $id;
    private $conn;
    private $api;
    
    public $name;
    public $distance;
    public $elevation;
    

    
    function __construct($segment_id = NULL,$dbconnection = NULL) {
            $this->conn = $dbconnection;
            $this->id =  $segment_id;
            
		}
    public function setValues( $arr ) {
        
        if( isset($arr["id"]) )  $this->id = $arr["id"];
        if( isset($arr["name"]) )  $this->name = $arr["name"];
        if( isset($arr["distance"]) )  $this->distance = $arr["distance"];
        if( isset($arr["elevation"]) )  $this->elevation = $arr["elevation"];
        
       
    }
    
    private function getValuesFromStrava() {
        $string = "segments/" . $this->id;
        $strava = $this->api->get($string);

        $this->name = urlencode($strava->name);
        $this->distance = $strava->distance;
        $this->elevation = $strava->total_elevation_gain;
    }
    private function updateDatabaseValues() {
        $sql = "UPDATE segments SET name='$this->name', distance=$this->distance , elevation=$this->elevation WHERE id=".$this->id;
        $result_update = $this->conn->query($sql); 
        
    }
    
    public function updateFromStrava($conn, $api) {
        $this->conn = $conn;
        $this->api = $api;
        $this->getValuesFromStrava();
        $this->updateDatabaseValues();
    }
    public function importGPX($api="") {
        if($api=="") $api = $this->$api;
        $string     = "segments/".$this->id."/streams/latlng";
        $strava_results    = $api->get($string);


        $gpx = "<?xml version=&quot;1.0&quot;?><gpx version=&quot;1.0&quot;><time>2005-11-07T14:00:09Z</time>
        <trk><name></name>" .$this->id."<desc>".date("c")."</desc><trkseg>";

        foreach($strava_results[0]->data as $arr) {
            $lat=$arr[0];
            $lon=$arr[1];
            $gpx.= "<trkpt lat=&quot;$lat&quot; lon=&quot;$lon&quot;><time>2005-11-07T12:03:31Z</time></trkpt>";
        }
        $gpx .="</trkseg></trk></gpx>";
        file_put_contents( "gpx/".$this->id.".gpx", htmlspecialchars_decode($gpx) );
    }
    
    public function checkExistGPX() {
        $file = "gpx/". $this->id. ".gpx";
        if ( file_exists($file) ) return true;
        
        return false;
    }
}
class user 
    {
    public $id=0;
    private $conn;
    private $api;
    
    public $firstname;
    public $lastname;
    private $email;
    public $main_token;
    
    public $admin_role=0;
    public $admin_id=0;
    public $challengeCurrentPosition;
   
    function __construct($segment_id = NULL,$dbconnection = NULL) {
            $this->conn = $dbconnection;
            $this->id =  $segment_id;
            
    }
    public function setApi($a) {
        $this->api = $a;
    }
    public function setUserFromStrava($strava_result) {
        $this->id = $strava_result->athlete->id;
        $this->firstname = $strava_result->athlete->firstname;
        $this->lastname = $strava_result->athlete->lastname;
        $this->main_token = $strava_result->access_token;
        $this->profile = $strava_result->athlete->profile_medium;
        $this->email = $strava_result->athlete->email;
        $this->setAdmin();
    }
    
    public function setChallengeCurrentPosition($pos) {
        $this->challengeCurrentPosition = $pos;
    }
    private function setAdmin() {
        $result = $this->conn->query("SELECT * FROM admin WHERE athlete_id=".$this->id);
        $data = $result->fetch_assoc();
        if($data["athlete_id"]) {
            $this->admin_id=intval($data["id"]);
            $this->admin_role=intval($data["role"]);
        }
    }
    public function isAdmin() {
        if($this->admin_id > 0) return true;
        else return false;
    }
    function isStravaUser() {
        if($this->id > 0) return true;
        else return false;
    }


    
    public function updateLoginCount() {
        $sql = "UPDATE athletes SET logincount = logincount + 1 WHERE id=$this->id";
        if ($this->conn->query($sql) === TRUE) {
                //echo "Record updated successfully";
        } else {
            //echo "Error updating record: " . $conn->error;
            $sql = "INSERT INTO athletes  (id,logincount) VALUES ($this->id,1)";
            $this->conn->query($sql);
        }
    }
    

    public function addEmailAlert($cid,$pos) {
        
         $sql = "INSERT INTO email_alert (athlete_id,challenge_id,pos,email) VALUES ($this->id,$cid,$pos,'$this->email')";
        $this->conn->query($sql);
    }
    public function removeEmailAlert($cid) {
        
         $sql = "DELETE FROM email_alert WHERE athlete_id=$this->id AND challenge_id=$cid";
        //$this->conn->query($sql);
        if ($this->conn->query($sql) === TRUE) {
                //echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->conn->error;
            
        }
    }
     public function checkEmailAlert($cid) {
        $result = $this->conn->query("SELECT * FROM email_alert WHERE athlete_id=$this->id AND challenge_id=$cid");
        $data = $result->fetch_assoc();
        if( $data["athlete_id"] ) {
            return true;
        } else {
            return false;
        }
     }
    public function getEmailAlertText($status) {
        if($status) return "Epostvarsler på";
        else return "Epostvarsler av";
    }
    public function getEmailAlertClass($status) {
    if($status) return "btn-success";
    else return "btn-primary";
}
}

?>