<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150900145-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150900145-1');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Blog for Kevin Whelan Freelance Web Developer">
    <meta name="keywords" content="blog, web developer, freelance, build website, greater lowell, greater boston">
    <meta name="author" content="Kevin Whelan">
    <meta property="og:image" content="images/preview-icon.png" />
    <link href="https://fonts.googleapis.com/css?family=Jomolhari&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Kevin Whelan Blog</title>
</head>
<body>

    <?php include('include/inc-header.php'); ?>

    <main>

        <div id="nav-bar-container">

            <div id="favicons-container">
                <ul>
                    <li><a href="https://twitter.com/kevinwhelandev" target="_blank"><img id="twitter-favicon" src="images/twitter-favicon.png" alt="twitter favicon"></a></li>

                    <li><a href="https://www.instagram.com/kevinwhelandev/" target="_blank"><img id="instagram-favicon" src="images/instagram-favicon.png" alt="instagram favicon"></a></li>
                </ul>   
            </div>


            <nav class="nav">
                <ul>
                    <li><a href="bio.php">Bio</a></li>
                    <li><a href="https://kevinwhelandev.com" target="_blank">Freelance</a></li>
                </ul>
            </nav>

        </div>
    

           <div class="posts-submitbutton-container">
            <div>
                <h2 id="h2-post">Posts</h2>
            </div>

            <div>
                <a id="subscribe-button" href="sign-up.php">Subscribe</a> 
            </div>
        </div>

        <div class="flex-container">
                
            <!-- posts -->
    
        </div>
        
    </main>

    <?php include('include/inc-footer.php')?>

    <script src="javascript/app.js"></script>
    
</body>
   
</html>