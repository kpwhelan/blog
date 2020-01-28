<?php 
    require('config/config.php');
    require('config/db.php');

    $id = $_GET['id'];

    //Create query
    $query = "SELECT * FROM posts WHERE id=" . $id;

    //Get results
    $result = mysqli_query($conn, $query);

    //Fetch data
    $post = mysqli_fetch_assoc($result);

    //Free result from memory
    mysqli_free_result($result);

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post - <?php post['title']; ?></title>
</head>
<body>


    
</body>
</html>