<?php
// establish connection
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'website';
$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
  echo "FAILED";
}else{
echo "Connected";
}

?>