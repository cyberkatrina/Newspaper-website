<?php

include 'login.php';

function showPage() {

print <<<PAGE3

<!DOCTYPE html>

<html lang="en">

<head>
   <title>Environment</title>
   <meta charset="UTF-8">
   <meta name="description" content="A Looming Environmental Catastrophe">
   <meta name="author" content="Katsiaryna Aliashkevich">
   <link href="cookies.css" rel="stylesheet">
   <link rel="icon" href="logo.png">
</head> 

<body>

          <p>
             <h4>A Looming Environmental Catastrophe</h4>
             Deforestation, the process of clearing forests and trees on a large scale, is one of the most pressing environmental issues of our time. 
             It has been reported that around 18 million acres of forests are lost every year, which is equivalent to 27 football fields per minute. 
             This alarming trend has significant consequences for our planet, including global warming, loss of biodiversity, soil erosion, and negative 
             impacts on the livelihoods of millions of people.
	  </p>
<img style="margin-left:15px" src="climate.png" alt="Picture of deforestation">
<center> <a href="cookies.php">Go Back to Main Page</a> </center>

</body>
</html>

PAGE3;
}

?>
