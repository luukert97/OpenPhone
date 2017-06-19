<html>

    <head>
    
        

        
        
    </head>

    <body>
 
     
<?php
$servername = "studmysql01.fhict.local";
$username = "dbi335676";
$password = "N-spoor15";
$dbname = "dbi335676";

        
        
        
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>

    
    <form action="send.php" method="GET">
        
            
insert app name
        <textarea id="name" rows="4" cols="50" name="name"></textarea><BR><BR>
insert app web url link
        <textarea id="url" rows="4" cols="50" name="url"></textarea><BR><BR>
insert appicon
        <textarea id="icon" rows="4" cols="50" name="icon"></textarea>        
  <input type="submit" name="submit"/>
        </form>
              

        
    <?php


$conn->close();

?>
    </body>  
</html>