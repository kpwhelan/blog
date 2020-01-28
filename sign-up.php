<?php 
    require('config/config.php');
    require('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/signup.css">
    <title>Subscribe</title>
</head>
<body>

    <div class="signup-form-container">

        <h2>Subscribe</h2>
        
        <br>
        <form id="email-signup-form">
            <input id="first-name" class="form-fields" type="text" placeholder="First Name" name="first-name" required>
            <br>
            <br>
            <input id="last-name" class="form-fields" type="text" placeholder="Last Name" name="last-name" required>
            <br>
            <br>
            <input id="email" class="form-fields" type="email" placeholder="Email" name="email" required>
            <br>
            <br>
            <button type="submit" value="Submit" id="submit-button">Submit</button>
        </form>

    
        <div id="response-message-paragraph"></div>
        
    </div>
    
    
    <div id="back-button-container">
        <a href=<?php echo ROOT_URL?>>Back</a>
    </div>
       
    
    <script src="javascript/app.js"></script>
</body>
</html>

