<?php
require "connect.php";

$name = $_POST['name'];
$scope = $_POST['scope'];
$market = $_POST['market'];
$con = new DB();

if ($scope == "user") {

    $data = $con->searchData($name, $market); //dodany $marekt
    echo json_encode($data);
}
if ($scope == "dep") {

    $data = $con->searchDep($name, $market); //dodany $market
    echo json_encode($data);
}

