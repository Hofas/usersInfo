<?php
include "connect.php";
//$selectQuery = "SELECT * from usersTest";
//$result =  mysqli_query($db,$selectQuery);
//$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

$dbPDO = new DB();
//$data = $dbPDO->viewData();
$data = $dbPDO->viewData();
//var_dump($data);
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
<div id="search">
    <form action="" method="post">
        <input type="text" name="user" id="user" oninput="search(this.value)">
    </form>
    <ul id="dataViewer">
        <?php
        foreach ($data as $i) {
            $dn = $i['Displayname'];
            $id = $i['id'];
       echo "<li> <a href='visit.php?ID=$id'>". $dn."</a></li>";
        }
        ?>
    </ul>

</div>
<script src="main.js"></script>
</body>
<script>
    const admButton = document.querySelector('#amdButton');
    admButton.addEventListener('click',()=>{
        window.location.href = "adminLogin.php";

    })

</script>
</html>
