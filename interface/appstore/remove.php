<html>

    <head>
    
        
            <LINK href="style.css" rel="stylesheet" type="text/css">
        
        
    </head>

    <body style="background-color:white;">
 <h1>Remove apps</h1>
<?php
$dbc = mysqli_connect('studmysql01.fhict.local', 'dbi335676', 'PASSWORD', 'dbi335676') or die('Error connecting to MySQL server.'); 
if(isset($_POST['submit_button']))
{
    mysqli_query($dbc, 'TRUNCATE TABLE `appicon`');
    mysqli_query($dbc, 'TRUNCATE TABLE `appname`');
    mysqli_query($dbc, 'TRUNCATE TABLE `appurl`');
    mysqli_query($dbc, 'INSERT INTO `appname`(`appname`) VALUES ("Settings");');
    mysqli_query($dbc, 'INSERT INTO `appurl`(`appurl`) VALUES ("settings.php");');
    mysqli_query($dbc, 'INSERT INTO `appicon`(`appicon`) VALUES ("images/settings.png");');
    
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>
<form method="post" action="">
    <input name="submit_button" type="submit" value="Reset apps" />
</form>
</html>

