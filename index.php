<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

// Page is set to home (home.php) by default, so when the visitor visits, that will be the page they see.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';


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
