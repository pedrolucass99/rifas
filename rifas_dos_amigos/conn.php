<?php  
$conn = new PDO("mysql:host=localhost;dbname=rifa_dos_amigos", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);