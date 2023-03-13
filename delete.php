<?php
require 'connect.php';

$itemId = $_GET['item_id'];

$query = "DELETE FROM items WHERE item_id = '$itemId'";

$result = mysqli_query($connet, $query);

header('location: index.php');