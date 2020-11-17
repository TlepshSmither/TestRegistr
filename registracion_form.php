<?php

include "DBController/xmlBDregistrator.php";

$a = simplexml_load_file('dbStorage/usersDB.xml');
echo '<pre>';
var_dump($a);
echo '</pre>';
?>
