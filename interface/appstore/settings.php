<html>
<head>
            <LINK href="style.css" rel="stylesheet" type="text/css">

    </head>
<body style="background-color:white;">
<h1>Settings</h1>
   
    
    <?php
$servername = "studmysql01.fhict.local";
$username = "dbi335676";
$password = "N-spoor15";
$dbname = "dbi335676";

// Verbinden met die hap
$conn = new mysqli($servername, $username, $password, $dbname);
?>        
    
    

    
</body>
<!--two options, either remove your apps or add a new one-->
    <a href="add.php"><div id="div1">
    Add apps
    </div></a>
    <a href="remove.php"><div id="div1">
    Remove apps
    </div></a>

        
    <?php


$conn->close();

?>
</html>