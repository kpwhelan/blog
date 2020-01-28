<?php 
    require('config/config.php');
    require('config/db.php');


    //Create query             
    $query = "SELECT * FROM posts ORDER BY id DESC";

    //Get results
    $result = mysqli_query($conn, $query);

    //Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Free result from memory
    mysqli_free_result($result);


    mysqli_close($conn);

 

   echo json_encode($posts);


?>


