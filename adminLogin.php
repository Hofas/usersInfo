<?php
session_start();
//$pass = "Truskawka2001!";
//$passCrypt = password_hash($pass,PASSWORD_DEFAULT);
//echo $passCrypt;
//
//exit();
if (isset($_POST['pass']) &&  strlen($_POST['pass']) >0 ) {
require "connect.php";
$selectQuery = "Select * from adm where login = 'adm' ";
$result = mysqli_query($db,$selectQuery);
$row = mysqli_fetch_assoc($result);
if ($row && password_verify($_POST['pass'],$row['pass'])) {

    echo 'login OK';
    header("location: admimport.php");
} else {echo 'enter right pass';};


}

?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="adminLogin.css">
    <title>AdmPage</title>
</head>
<body>

<div id="logBox">
    <form action="" method="post">
        <p>ADM</p>
        <label for="pass">PASS:</label>
        <input type="password" id="pass" name="pass">
        <input type="submit" value="LOgIn">
    </form>
</div>


</body>
<script>
    window.onload = function() {
        // alert('hello');

    };

</script>
</html>
