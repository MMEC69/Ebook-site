<?php

$host = "localhost";
$dbname = "ebookstore";
$username = "root";
$password = "";


$mysqli = new mysqli(hostname: $host,
                    username: $username,
                    password: $password,
                    database: $dbname);

if ($mysqli->connect_errno){
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;


?>

<!-- 
Group members
=============
OTH/IT/IT_IFLS_001/B002/0047 M20001008006 M. Manosha Eronne Cooray 
OTH/IT/IT_UGC_001/B002/0003 M20010525001 G.D Kaveesh Jeffry Vershan 
OTH/IT/IT_UGC_001/B002/0002 M20011011009 R.M. Pawan Banuka Perera 
OTH/IT/IT_UGC_001/B002/0004 M20010828004 H.D Dakshina Prasad 
OTH/IT/IT_UGC_001/B002/0001 M20010315001 Thimira Manujaya Bandara Dissanayaka
-->

