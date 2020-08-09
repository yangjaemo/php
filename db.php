<?php
$host = "localhost,http://smcyjm.dothome.co.kr/";
$dbname = 'users';
$user = 'smcyjm';
$password = 'gosu3308*^^*';
$pdo = new PDO(
        'mysql:host=' . $host . ';dbname=' . $dbname, $user, $password
);
