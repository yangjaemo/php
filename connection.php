<?php
$db_host="localhost"; //localhost server 
$db_user="root"; //database username
$db_password="123"; //database password   
$db_name="registerlogin"; //database name

try{
 $db=new PDO("mysql:host={$db_host};dbname={$db_user}",$username,$password);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOEXCEPTION $e){
 $e->getMessage();
}
?>
