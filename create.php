<?php

require 'connect.php';


// Create new notes
$query = "INSERT INTO items (item_name) VALUES ('');";
$result = mysqli_query($connet, $query);

// Select latest notes
$query = "SELECT * FROM items ORDER BY item_id DESC LIMIT 0,1";
$result = mysqli_query($connet, $query);
$row = mysqli_fetch_assoc($result);
$selected_id = $row['item_id'];


// redirect to index with selected latest notes
    header('location: /?id='.$selected_id);





if(isset($_POST['create'])){

    $selectId = $_POST['select_id'];

    $query = "INSERT INTO items (item_name) VALUES ('$selectId');";

    $result = mysqli_query($connet, $query);

    header('location: index.php');
}