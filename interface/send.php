<html>
    <body>
   <h1>sendpage</h1> 

<?php

$servername = "studmysql01.fhict.local";
$username = "dbi335676";
$password = "PASSWORD";
$dbname = "dbi335676";


//all our stuff to connect
$conn = new mysqli($servername, $username, $password, $dbname);

//test is the connection with the db works
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

//taking everything from the textarea's and sending them to the db
$appname = "INSERT INTO appname SET appname = ('".$_GET["name"]."')";
$appurl = "INSERT INTO appurl SET appurl =
('".$_GET["url"]."')";
$appicon = "INSERT INTO appicon SET appicon =
('".$_GET["icon"]."')";

//check if everything was completed
if (($conn->query($appname) === TRUE)&&  
($conn->query($appurl) === TRUE)&&  
($conn->query($appicon) === TRUE))


{
    echo "Database bijgewerkt";
    
} else {
    echo "Error: " . $ptm . "<br>" . $conn->error;
}







//close connection


$conn->close();

?>
    </body>  
</html>