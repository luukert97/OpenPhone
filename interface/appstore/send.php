<html>
    <body>
   <h1>sendpage</h1> 

<?php

$servername = "studmysql01.fhict.local";
$username = "dbi335676";
$password = "N-spoor15";
$dbname = "dbi335676";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 


$appname = "INSERT INTO appname SET appname = ('".$_GET["name"]."')";
$appurl = "INSERT INTO appurl SET appurl =
('".$_GET["url"]."')";
$appicon = "INSERT INTO appicon SET appicon =
('".$_GET["icon"]."')";


if (($conn->query($appname) === TRUE)&&  
($conn->query($appurl) === TRUE)&&  
($conn->query($appicon) === TRUE))


{
    //when an app is added succesfully, take the user back to the home screen
    header ('location: dash.php');
    
} else {
    echo "Error: " . $ptm . "<br>" . $conn->error;
}










$conn->close();

?>
    </body>  
</html>