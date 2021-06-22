<?php
require "connect.php";

$name = $_POST['name'];
$con = new DB();
$data = $con->searchData($name);

echo json_encode($data);
