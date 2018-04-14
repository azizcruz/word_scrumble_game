<?php 

$dsn = 'mysql:hostl=localhost;dbname=game';
$user = 'root';
$pass = '';

$options = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

);

try {
    
    $connect = new PDO($dsn, $user, $pass, $options);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $exception) {
    
    echo 'Connection Failed the error is: ' . $exception->getMessage();
    
}
?>
