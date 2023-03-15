<?php
require 'connect.php';

if(isset($_POST['save'])){
    $item_id = $_POST['save'];
    $item_name = $_POST['notes'];
    $query = "UPDATE items SET item_name='$item_name' WHERE item_id='$item_id'";
    $result = mysqli_query($connet, $query);
}

if(isset($_POST['delete'])){
    $item_id = $_POST['delete'];
    $query = "DELETE FROM items WHERE item_id = '$item_id'";
    $result = mysqli_query($connet, $query);
}

$query = "DELETE FROM items WHERE item_name = ''";
$result = mysqli_query($connet, $query);

header('location: /');