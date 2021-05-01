<!-- wala ni labot -->
<?php
$dbhost = "localhost";
$dbuser ="root";
$dbpassword="";
$dbname = "milktea";
$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(!$con){
    die ("failed to connect!");
};
?>