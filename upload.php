<?php
    $fileName = $_FILES['file']['name'];
    $location = "./upload/".$fileName;

    if(move_uploaded_file($_FILES['file']['tmp_name'] , $location)){
        echo "Success";
    }
    else{
        echo "Failed";
    }
?>