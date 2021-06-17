<?php

?>


<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>usersInfo</title>
</head>
<body>
<div id="admLogin"><input type="button" value="adm" id="amdButton"></div>
<div id="header"><p>Users Info page...</p></div>
<div id="search"><input id="searchUser" type="text"></div>

</body>
<script>
    const admButton = document.querySelector('#amdButton');
    admButton.addEventListener('click',()=>{
        window.location.href = "adminLogin.php";

    })

</script>
</html>
