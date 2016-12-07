<?php
include "../stravalogon.php";
//include "../class_lib.php"; 

if(!$currentUser->isAdmin()) {
    header("Location: ../index.php");
die();
} else {
    $todo = $_GET["todo"];
    
    

    
    
    if($todo=="add") {
        $url = $_POST["url"];
        $segment_id = basename(parse_url($url, PHP_URL_PATH));
        $challenge_id = $_POST["challenge"];
        
        $sql = "INSERT INTO segments  
                (id) VALUES ($segment_id)";

        if ($conn->query($sql) === TRUE) {
           // echo "New record created successfully";
        } else {
           // echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $sql = "INSERT INTO challenge_relation  
                (challenge_id, segment_id) VALUES ($challenge_id,$segment_id)";
        if ($conn->query($sql) === TRUE) {
           // echo "New record created successfully";
                    
                    
                    // ************* Segment-update    
                    
                    $sql = "SELECT * FROM segments WHERE name IS NULL OR name=''";
                    $result = $conn->query($sql);      

                     if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            // henter segmentdata fra strava-API
                            $seg = new segment($row["id"]);
                            $seg->updateFromStrava($conn,$api); 
                            $seg->importGPX($api);
    
 
                        }

   
                     }
        } else {
           // echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
    } else if($todo=="delete"){
        $segment_id = $_GET["s_id"];
        $challenge_id = intval($_GET["c_id"]);
        $sql = "DELETE FROM challenge_relation WHERE segment_id=$segment_id AND challenge_id=$challenge_id";

        if ($conn->query($sql) === TRUE) {
            //echo "Record deleted successfully";
        } else {
            //echo "Error deleting record: " . $conn->error;
        }
     } else if($todo=="reset"){
        $segment_id = $_GET["s_id"];
        $challenge_id = intval($_GET["c_id"]);
        
        $sql = "SELECT * FROM challenge WHERE id=$challenge_id";
        $result = $conn->query($sql);      
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $sd = $row["start_date"];
        
                    
        
        
        
            $sql = "UPDATE challenge_relation SET last_update='$sd' WHERE segment_id=$segment_id";

            if ($conn->query($sql) === TRUE) {
                //echo "Record deleted successfully";
            } else {
                //echo "Error deleting record: " . $conn->error;
            }
            
        }
    }
    
    header("Location: segmentedit.php?id=". $challenge_id);
     //echo "Location: segmentedit.php?id=". $challenge_id;
    

}
?>