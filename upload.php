<?php

    $uploadedfile = $_FILES["file"]["tmp_name"];
    $folderPath = "uploads/";
    $moved = move_uploaded_file($uploadedfile, $folderPath.$_FILES["file"]["name"]);
    if($moved)
    {
        echo 'image uploaded in -: '.$folderPath.$_FILES["file"]["name"];
    }
    else{
        echo 'Unable to move file in target folder';
    }

?>