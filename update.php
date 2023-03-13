<?php
require 'connect.php';

if(isset($_POST['update'])){
    $item_id = $_POST['update'];
    $item_name = $_POST['item_name'];
    $query = "UPDATE items SET item_name='$item_name' WHERE item_id='$item_id'";
    $result = mysqli_query($connet, $query);
    header('location: index.php');
}