<?php
include "connect.php";

$dep = $_GET['dep'];

//echo $dep;
$con = new DB();

$data = $con->searchUserByDep($dep);


?>

<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="visitDep.css">
    <title>visitDep</title>
</head>
<body onload="resize()">

<div id="main">

    <table id="userInfo">

<!--        Displayname, Mail, OficePhone, MobilePhone-->
  <?php
  foreach ($data as $record) {
      $mobilka = $record['MobilePhone'];
      if (strlen($mobilka)<1){$mobilka = 'No Mobile';};
      echo <<<EOL

        <tr>
            <td>{$record['Displayname']}</td>
            <td>{$record['Mail']}</td>
            <td>{$record['OficePhone']}</td>
            <td>{$mobilka}</td>
        </tr>
EOL;
  }
?>
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