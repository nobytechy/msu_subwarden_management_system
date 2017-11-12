<?php ob_start();?>
<?php

 try 
 { 
 $pdo= new PDO("mysql:host=localhost;dbname=msu","root",""); 
 } catch 
(PDOException $exc) 
{ echo $exc->getMessage(); exit(); }

?>
<?php ob_end_flush();?>