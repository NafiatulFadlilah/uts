<?php
    $target_path="foto/";

    $target_path = $target_path . basename($_FILES['uploadedfoto']['name']);

    if(move_uploaded_file($_FILES['uploadedfoto']['tmp_name'],$target_path)){
        echo "The file " . basename($_FILES['uploadedfoto']['name']) . "has been uploaded";
    }else{
        echo "There was an error uploading the file, please try again!";
    }
?>