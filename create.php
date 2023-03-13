<?php
require 'connect.php';

if(isset($_POST['create'])){

    $selectId = $_POST['select_id'];

    $query = "INSERT INTO items (item_name) VALUES ('$selectId');";

    $result = mysqli_query($connet, $query);

    header('location: index.php');
}