<html>

    <head>

        <LINK href="style.css" rel="stylesheet" type="text/css">
            <script type="text/javascript" src="../javascript/flexcroll.js"></script>
    </head>

    <body>

        
<?php
$servername = "studmysql01.fhict.local";
$username = "dbi335676";
$password = "N-spoor15";
$dbname = "dbi335676";

// Verbinden met die hap
$conn = new mysqli($servername, $username, $password, $dbname);
?>        
        
 
            
            
            
            <div id="scroll" class="flexcroll">
<ul>
    <BR><BR>
        <!--each group of 3 php scripts represents one icon with a url and a name-->
<li><a href="<?php    
$sql = "SELECT * FROM appurl LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appurl"];
}}
?>"><img src="
    <?php    
$sql = "SELECT * FROM appicon LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appicon"];
}}
?>" alt=""><span><?php    
$sql = "SELECT * FROM appname LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appname"];
}}
?>
</span></a></li>
        
        <li><a href="<?php    
$sql = "SELECT * FROM appurl LIMIT 2,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appurl"];
}}
?>"><img src="
    <?php    
$sql = "SELECT * FROM appicon LIMIT 2,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appicon"];
}}
?>" alt=""><span><?php    
$sql = "SELECT * FROM appname LIMIT 2,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appname"];
}}
?>
</span></a></li>

        <li><a href="<?php    
$sql = "SELECT * FROM appurl LIMIT 3,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appurl"];
}}
?>"><img src="
    <?php    
$sql = "SELECT * FROM appicon LIMIT 3,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appicon"];
}}
?>" alt=""><span><?php    
$sql = "SELECT * FROM appname LIMIT 3,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appname"];
}}
?>
</span></a></li>
        
        <li><a href="<?php    
$sql = "SELECT * FROM appurl LIMIT 4,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appurl"];
}}
?>"><img src="
    <?php    
$sql = "SELECT * FROM appicon LIMIT 4,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appicon"];
}}
?>" alt=""><span><?php    
$sql = "SELECT * FROM appname LIMIT 4,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appname"];
}}
?>
</span></a></li>
        
        
        <li><a href="<?php    
$sql = "SELECT * FROM appurl LIMIT 5,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appurl"];
}}
?>"><img src="
    <?php    
$sql = "SELECT * FROM appicon LIMIT 5,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appicon"];
}}
?>" alt=""><span><?php    
$sql = "SELECT * FROM appname LIMIT 5,1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo $row["appname"];
}}
?>
</span></a></li>

</ul>
</div>
            
            
    </body>
        
    <?php
//close connection

$conn->close();

?>
    
</html>