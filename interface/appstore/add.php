<html>

    <head>
    
        
            <LINK href="style.css" rel="stylesheet" type="text/css">
        
        
    </head>

    <body style="background-color:white;">
 <h1>Add apps</h1>

     
<?php
$servername = "studmysql01.fhict.local";
$username = "dbi335676";
$password = "PASSWORD";
$dbname = "dbi335676";

        
        
        
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>

    
    <form action="send.php" method="GET">
        
<!--textarea's to insert new apps-->            
        <textarea id="name" placeholder="The name of the app" rows="4" cols="30" name="name"></textarea><BR>
        <textarea id="url" placeholder="URL to the app" rows="4" cols="30" name="url"></textarea><BR>
        <textarea id="icon" placeholder="Location of the icon" rows="4" cols="30" name="icon"></textarea><BR>        
  <input type="submit" name="submit"/>
        </form>
              

        
    <?php


$conn->close();

?>
    </body>  
</html>