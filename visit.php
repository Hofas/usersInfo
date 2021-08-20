<?php
include "connect.php";

$ID = $_GET['ID'];

//echo $ID;


$con = new DB();

$data = $con->getUser($ID);

//var_dump($data);
$dn =$data[0]['Displayname'];
$phone = $data[0]['OficePhone'];
$dep = $data[0]['Department'];
$title  = $data[0]['Title'];
//$description = $data[0]['Description'];
//$hala = substr($description,0,3);
$hala = $data[0]['Market'];
$manager = $data[0]['Manager'];
$city = $data[0]['City'];
$Eid = $data[0]['EmployeeID'];
$mobile = $data[0]['MobilePhone'];
$mail = $data[0]['Mail'];
$office = $data[0]['Office'];
$grupy = $data[0]['Grupy'];
$grupy = str_ireplace(" V-TG-PL","::v-tg-pl",$grupy);
$grupy = explode("::",$grupy);
//foreach ($grupy as $grupa) {
// echo $grupa."<br>";
//
//}
//
//
//exit();
?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="visit.css">
    <title>Document</title>
</head>
<body onload="resize()">

<div id="main">

    <table id="userInfo">
        <tr>
            <td>User:</td>
            <td><?php echo $dn;?></td>
        </tr>
        <tr>
            <td>Dział:</td>
            <td><?php echo $dep;?></td>
        </tr>
        <tr>
            <td>Stanowisko:</td>
            <td><?php echo $title;?></td>
        </tr>
        <tr>
            <td>Hala:</td>
            <td><?php echo $hala;?></td>
        </tr>
        <tr>
            <td>Przełożony:</td>
            <td><?php echo $manager;?></td>
        </tr>
        <tr>
            <td>Miasto:</td>
            <td><?php echo $city;?></td>
        </tr>
        <tr>
            <td>Numer Personalny:</td>
            <td><?php echo $Eid;?></td>
        </tr>
        <tr>
            <td>Telefon:</td>
            <td><?php echo $phone;?></td>
        </tr>
        <tr>
            <td>Komórka:</td>
            <td><?php echo $mobile;?></td>
        </tr>
        <tr>
            <td>Mail:</td>
            <td><?php echo $mail;?></td>
        </tr>
        <tr>
            <td>Office:</td>
            <td><?php echo $office;?></td>
        </tr>
        <tr>
            <td>Grupy:</td>
            <td id="grupy"><?php foreach ($grupy as $grupa) {
                 echo $grupa."<br>";
                }?></td>
        </tr>

    </table>

</div>
<script>
    function resize(){
        let contentWidth = document.getElementById("userInfo").offsetWidth;
        let contentHeight = document.getElementById("userInfo").offsetHeight;
        window.resizeTo(contentWidth+20,contentHeight+100);
        // alert('works..');


    }
</script>
</body>
</html>
