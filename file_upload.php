<?php
    function fileUpload($image){

        if($image["error"] == 4){
            $imageName = "book.jpg"; 
            $message = "No image has been chosen, but you can upload an image later :)";
        }else{
            $checkIfImage = getimagesize($image["tmp_name"]);
            $message = $checkIfImage ? "Ok" : "Not an image";
        }

        if($message == "Ok"){
            $ext = strtolower(pathinfo($image["name"],PATHINFO_EXTENSION)); 
            $imageName = uniqid(""). "." . $ext;
            $destination = "img/{$imageName}";
            move_uploaded_file($image["tmp_name"], $destination); 
        }

        return [$imageName, $message];
    }

?>