<?php
$db_host="http://smcyjm.dothome.co.kr/"; //localhost server 
$db_user="smcyjm'"; //database username
$db_password="gosu3308*^^*"; //database password   
$db_name="users"; //database name

try
{
 $db=new PDO("mysql:host={$servername};dbname={$database}",$username,$password);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
 $e->getMessage();
}

?>
