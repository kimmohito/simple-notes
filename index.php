<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <meta http-equiv="refresh" content="5"/> -->
</head>
<body>
<?php
    require 'connect.php';


    $query = "SELECT * FROM items";

    $result = mysqli_query($connet, $query);

    echo '
        <table border=1>
            <tr>
                <th>
                    Item Name
                </th>
                <th>
                    Option
                </th>
            </tr>
        ';

    while($row=mysqli_fetch_assoc($result)){
        $itemId=$row['item_id'];
        $itemName=$row['item_name'];

        echo '
            <tr>
                <td>
                    '.$itemName.'
                </td>
                <td>
                    <a href="edit.php?select_id='.$itemId.'">Edit</a>
                    <a href="delete.php?select_id='.$itemId.'">Delete</a>
                </td>
            </tr>
        ';
    }



    echo '
    <form action="create.php" method="post"><tr>
        <td>
            <input type="text" name="item">
            
            
        </td>
        <td>
            <button name="create" function="submit">Create</button>
        </td>
    </tr>
    </form>';


    
    echo '
        </table>
    ';
?>






</body>
</html>

