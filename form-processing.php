<?php 

require('config/config.php');
require('config/db.php');
require('PHPMailer/PHPMailerAutoload.php');

//Create query
$query = "SELECT email FROM emails";

//Get results
$result = mysqli_query($conn, $query);

//Fetch data
$emailsAssocArray = mysqli_fetch_all($result);

$currentEmailList = array_values($emailsAssocArray);

//Free result from memory
mysqli_free_result($result);




if(isset($_POST['firstname'], $_POST['lastname'], $_POST['email'])) {


    $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if(empty($firstName) || empty($lastName) || empty($email)) {
        echo "<p style='color: red;'> Please fill in required fields</p>";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color: red;'> Please enter a valid email address";
    }


           $query = "INSERT INTO emails (id, first_name, last_name, email) VALUES (NULL, '$firstName', '$lastName', '$email')";

           $sendEmailCheck = true;

           foreach($currentEmailList as $emailItem) {
            foreach($emailItem as $emailAddress) {
                if($emailAddress === $email){
                    $sendEmailCheck = false;
                    break;
                }
            }
        }

        if($sendEmailCheck === true) {
            if(mysqli_query($conn, $query)) {
                echo "<p style='color: #fff;'> Success! \nThanks for Lovin' Me</p>";
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = '465';
                $mail->isHTML();
                $mail->Username = 'kwhelanblog@gmail.com';
                $mail->Password = 'iloveJESSICA1!';
                $mail->setFrom('kwhelanblog@gmail.com');
                $mail->Subject = "Welcome!";
                $mail->Body =nl2br("Hey " . $firstName . ", \n I just wanted to say thank you for signing up for my blog. I hope you enjoy it and you'll get notified anytime a new post goes live. Thanks again! \n\n\n Cheers, \n Kevin Whelan"); 
                $mail->AddAddress($email);

                $mail->send();
            } else {
                echo "<p style='color: red;'> Error Connecting To Databse: " . $conn->error;
            }
        } elseif($sendEmailCheck === false) {
            echo "<p style='color: #fff;'>You're already signed up... \n Thanks for lovin' me twice though!</p>";
        }
          
           
       
    
}