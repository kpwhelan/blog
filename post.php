<?php 
    require('config/config.php');
    require('config/db.php');

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    

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
    <link rel="stylesheet" href="css/post-page.css">
    <link rel="stylesheet" href="css/nav-bar-pages.css">
    <link href="https://fonts.googleapis.com/css?family=Jomolhari&display=swap" rel="stylesheet">
    <title>Post - <?php echo $post['title']; ?></title>
</head>
<body>

    <?php include('include/inc-post-header.php'); ?>


    <main>
        <div class="wrapper">
            <h1><?php echo $post['title']; ?></h1>
            <small>Created - <?php echo $post['create_date']; ?></small>
            <h2>By - <?php echo $post['author']; ?></h2>
            <p><?php echo $post['body']; ?></p>

            <a href="<?php echo ROOT_URL ?>">Back</a>
        </div>
    </main>

    <?php include('include/inc-footer.php')?>
    
</body>
</html>
