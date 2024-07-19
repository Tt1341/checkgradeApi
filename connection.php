<?php
$dbuser = "root"; 
$dbpass = ""; 
$dbname = "schooldb2"; 

try {
    
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=' . $dbname, $dbuser, $dbpass);
    
    $conn->query('SET NAMES UTF8');

   
    date_default_timezone_set('Asia/Bangkok');
} catch (PDOException $e) {
   
    error_log("การเชื่อมต่อล้มเหลว: " . $e->getMessage());
}
?>

