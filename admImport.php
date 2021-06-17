<?php
session_start();

?>


<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import Data</title>
</head>
<body>

<div id="importBox">
    <form action="importTOsql.php" method="post" enctype="multipart/form-data">
    <p>Import new Data</p>
        <input type="file" name="file" accept=".csv">
        <input type="submit" value="Import" name="import">
    </form>
</div>


</body>
</html>
