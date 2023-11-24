<?php

include 'login.php';

function showPage() {

print <<<PAGE3

<!DOCTYPE html>

<html lang="en">

<head>
   <title>Music Festival</title>
   <meta charset="UTF-8">
   <meta name="description" content="Music festival lineup announced">
   <meta name="author" content="Katsiaryna Aliashkevich">
   <link href="cookies.css" rel="stylesheet">
   <link rel="icon" href="logo.png">
</head> 

<body>

    <p>
        <h4>Music festival lineup announced</h4>
        Get ready to rock out! The highly anticipated lineup for this year's music festival has just been announced, and it's a doozy. Featuring a mix of 
	established stars and up-and-comers, this year's festival promises to be one for the ages.

    </p>
<img style="margin-left:15px" src="festival.png" alt="Picture of Music Festival">
<center> <a href="cookies.php">Go Back to Main Page</a> </center>

</body>
</html>

PAGE3;
}

?>
