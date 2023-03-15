<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <meta http-equiv="refresh" content="5"/> -->
</head>
<body class="w-full h-full">
<?php

    require 'connect.php';

    echo '<div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 p-4 bg-white shadow-md border border-gray-200 rounded-md">';
    
        echo '<div class="text-2xl" font-bold>Notes</div>';

        $query = "SELECT * FROM items";
        $result = mysqli_query($connet, $query);

        while($row=mysqli_fetch_assoc($result)){
            $itemId=$row['item_id'];
            $itemName=$row['item_name'];

            if(isset($_GET['id']) && $_GET['id']==$itemId){

                echo '<form action="update.php" method="post">';
                    echo '<textarea name="notes" class="bg-white p-4 w-80 h-20 border-2 border-gray-400 rounded-md relative mt-4 hover:bg-gray-100">';
                        echo $itemName;
                    echo '</textarea>';
                    echo '<div class="flex justify-end mt-2">';
                        echo '<button name="delete" type="submit" value="'.$_GET['id'].'" class="p-2 px-4 rounded-md text-white bg-red-500">Delete</button>';
                        echo '<button name="save" type="submit" value="'.$_GET['id'].'" class="p-2 px-4 rounded-md text-white bg-indigo-500 ml-2">Save</button>';
                    echo '</div>';
                echo '</form>';

            }else{
                echo '<a href="?id='.$itemId.'">';
                    echo '<div class="bg-indigo-200 p-4 w-80 h-20 border border-indigo-400 rounded-md relative mt-4 hover:bg-indigo-100">';
                        echo '<div class="text-indigo-600">'.$itemName.'</div>';        
                    echo '</div>';
                echo '</a>';

            }



            

        }
    


        echo '<a href="create.php">';
            echo '<div class="bg-indigo-200 p-4 w-80 h-15 border border-indigo-400 rounded-md relative mt-4 hover:bg-indigo-100">';
                echo '<div  class="text-indigo-600">Click here to add new notes...</div>';  
            echo '</div>';
        echo '</a>';


    echo '</div>';




?>






</body>
</html>

