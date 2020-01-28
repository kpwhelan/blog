<?php

//Connect to db
$conn = mysqli_connect('localhost', 'kevinw15_blogadmin', 'iloveJESSICA1!', 'kevinw15_myblog');

//Check connection
if(mysqli_connect_errno()) {
   echo "Failed to connect to MySQL" . mysqli_connect_errno();
  
}