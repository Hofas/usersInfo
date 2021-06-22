<?php
include "connect.php";

$ID = $_GET['ID'];

//echo $ID;


$con = new DB();

$data = $con->getUser($ID);

//var_dump($data);

echo "Name:".$data[0]['Displayname'];
echo "<br>";
echo "Telefon:".$data[0]['OficePhone'];
echo "<br>";
echo "Dział:".$data[0]['Department'];
echo "<br>";
echo "Stanowisko:".$data[0]['Title'];
echo "<br>";
echo "Przełożony:".$data[0]['Manager'];

