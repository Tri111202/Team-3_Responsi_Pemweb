<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $db = "responsi1"; 
    
    $conn = new mysqli($servername, $username, $password, $db); 
    
    //Memeriksa Koneksi
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error); 
    }
?>