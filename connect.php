<?php
$server='localhost';
$admin='Admin1';
$password='cmI6F!3jIIaSUE2.';
$baza='spravochnik';

$connect=mysqli_connect($server, $admin, $password, $baza);
if(!$connect){
   die('error'.mysqli_connect_error());
}

?>