<?php

include 'login.php';

function showPage() {

print <<<PAGE3

<!DOCTYPE html>

<html lang="en">

<head>
   <title>Ai Art</title>
   <meta charset="UTF-8">
   <meta name="description" content="The Rise of AI in Art">
   <meta name="author" content="Katsiaryna Aliashkevich">
   <link href="cookies.css" rel="stylesheet">
   <link rel="icon" href="logo.png">
</head> 

<body>

    <p>
        <h4>The Rise of AI in Art</h4>
        Artificial intelligence (AI) has been making inroads in various fields, and the art world is no exception. In recent years, AI-generated art has been 
        gaining recognition and popularity, as artists and technologists experiment with new ways of using AI to create and enhance art.
     </p>
<img style="margin-left:15px" src="art.png" alt="Picture of AI Art">
<center> <a href="cookies.php">Go Back to Main Page</a> </center>


</body>
</html>
PAGE3;
}


?>
