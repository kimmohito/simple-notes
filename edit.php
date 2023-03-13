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
        if(isset($_GET['select_id'])){
            $selectId = $_GET['select_id'];
        }else{
            $selectId = '';
        }
        $itemId=$row['item_id'];
        $itemName=$row['item_name'];

        if($selectId==$itemId){
            echo '
                <form action="update.php" method="post">
                    <tr>
                        <td>
                            <input type="text" name="item_name" value="'.$itemName.'">
                        </td>
                        <td>
                           <button type="submit" name="update" value="'.$itemId.'">Save</botton>
                        </td>
                    </tr>
                </form>
            ';
        }else{
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