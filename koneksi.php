<?php 
try { 
    $pdo_conn = new PDO('mysql:host=hmti.azurewebsites.net;dbname=localdb', 'root', '',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
