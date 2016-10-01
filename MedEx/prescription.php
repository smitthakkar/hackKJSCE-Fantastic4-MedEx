<?php

$db_name="medex";
$username="root";
$password="";
$host="localhost";
$tb_name="Prescription";
mysql_connect($host,$username,$password);
mysql_select_db($db_name);

$name=$_POST['name'];
$days=$_POST['days'];
$no=$_POST['no'];
$time=$_POST['time'];

$sql="INSERT INTO $tb_name (med_name,days,times_day,time_of_day) VALUES ('".$name."', '".$days."','".$no."','".$time."')";
$result=mysql_query($sql);

if($result){
	header('Location: next.php');
}
?>
