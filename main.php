<?php
$username='root';
$hostname='localhost';
$userpassword='';
$dbname='exam_guide_system';

$con=mysqli_connect($hostname,$username,$userpassword,$dbname);
if(!$con)
{
 die('Not conneted with database'.mysql_error());
}



?>