<!--

<?php  
$servername = "localhost";  
$username = "root";  
$password = "";  
$database = "registerlogin";  
$conn = new mysqli($servername, $username, $password, $database);  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  
?>  
-->

<?php
$db_host="localhost,http://smcyjm.dothome.co.kr/"; //localhost server 
$db_user="users'"; //database username
$db_password="gosu3308*^^*"; //database password   
$db_name="registerlogin"; //database name

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