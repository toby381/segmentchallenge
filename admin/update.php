<?php

include "../stravalogon.php";

if(!$currentUser->isAdmin()) {
    header("Location: ../index.php");
die();
} else {
   
    $errormsg = false;
    $name = $_POST["navn"];
    $description = $_POST["description"];
    $start_date = date("c", strtotime($_POST["startdato"]));
    $end_date = date("c", strtotime($_POST["sluttdato"]));
    //$image = $_POST["bilde"];
    $image="";
    $typer = $_POST["typer"];
    $regler = $_POST["regler"];
    $area = $_POST["area"];
    $path =  hyphenize( $_POST["navn"] );
    
    if( $_POST["publisert"]=="yes") $published=1;
    else $published=0;
    
    
    
    
    if(!isset($_GET["id"]) ) {
        $image = imageUpload();
        $sql = "INSERT INTO challenge 
                (path,name, start_date, end_date,image,description,type,regler,admin_id,area)
        VALUES ('$path','$name', '$start_date', '$end_date','$image','$description',$typer,$regler,$currentUser->admin_id,$area)";

        if ($conn->query($sql) === TRUE) {
           if($errormsg) echo "New record created successfully"."<br>";
        } else {
           if($errormsg) echo "Error: " . $sql . "<br>" . $conn->error."<br>";
        }
         if(!$errormsg) header("Location: admin.php");
    } else {
        $image = imageUpload();
        if(strlen($image)>0) $image = "image='$image',";
        else $image ="";
        $sql = "UPDATE challenge SET 
                path='$path',
                name='$name',
                start_date='$start_date',
                end_date='$end_date',
                $image
                description='$description',
                published=$published,
                type=$typer,
                regler=$regler,
                area=$area
                
                WHERE id=".$_GET["id"];

            if ($conn->query($sql) === TRUE) {
               if($errormsg) echo "Record updated successfully"."<br>";
            } else {
                if($errormsg) "Error updating record: " . $conn->error."<br>";
            }
         if(!$errormsg) header("Location: edit.php?id=".$_GET["id"]."&msg=lagret");
    }
    //echo $path;
    

}



function imageUpload() {
    global $errormsg;
    $i="";
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["bilde"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["bilde"]["tmp_name"]);
        if($check !== false) {
            if($errormsg) echo "File is an image - " . $check["mime"] . "."."<br>";
            $uploadOk = 1;
        } else {
            if($errormsg) echo "File is not an image."."<br>";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        if($errormsg) echo "Sorry, file already exists."."<br>";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["bilde"]["size"] > 5000000) {
        if($errormsg) echo "Sorry, your file is too large."."<br>";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        if($errormsg) echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."."<br>";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        if($errormsg) echo "Sorry, your file was not uploaded."."<br>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["bilde"]["tmp_name"], $target_file)) {
            $i=basename($_FILES["bilde"]["name"]);
            if($errormsg) echo "The file ". basename( $_FILES["bilde"]["name"]). " has been uploaded."."<br>";
        } else {
            $i="";
            if($errormsg) echo "Sorry, there was an error uploading your file."."<br>";
        }
    }
    return $i;
    
    
}

?>