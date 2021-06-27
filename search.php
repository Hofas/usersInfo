<?php
require "connect.php";

$name = $_POST['name'];
$scope = $_POST['scope'];
$con = new DB();
if ($scope == "user") {

    $data = $con->searchData($name);
    echo json_encode($data);
}
if ($scope == "dep") {

    $data = $con->searchDep($name);
    echo json_encode($data);
}

