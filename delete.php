<?php
    require_once "db_connect.php";

    $id = $_GET["id"]; // to take the value from the parameter "id" in the url 
    $sql = "SELECT * FROM book WHERE id = $id"; // finding the product 
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);  // fetching the data 
    if($row["image"] != "product.png"){ // if the picture is not product.png (the detault picture) we will delete the picture
        unlink("img/$row[image]");
    }
    
    $delete = "DELETE FROM book WHERE id = $id"; // query to delete a record from the database

    if(mysqli_query($connect, $delete)){
        header("Location: index.php");
    }else {
        echo "Error";
    }
    
    mysqli_close($connect);
?>
