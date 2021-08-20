<?php
//include "connect.php";
//$selectQuery = "SELECT * from usersTest";
//$result =  mysqli_query($db,$selectQuery);
//$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

//$dbPDO = new DB();
//$data = $dbPDO->viewData();
//$data = $dbPDO->viewData();
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
<div class="officeScope">
    <label for="market">Hala:</label>
       <select name="market" id="market">
           <option value="%">All</option>
           <option value="101">Centrala 101</option>
           <option value="110">Poznań 110</option>
           <option value="111">Warszawa 111</option>
           <option value="112">Wrocław 112</option>
           <option value="113">Szczecin 113</option>
           <option value="114">Łódź 114</option>
           <option value="115">Warszawa 115</option>
           <option value="116">Warszawa 116</option>
           <option value="117">Katowice 117</option>
           <option value="118">Gliwice 118</option>
           <option value="120">Radom 120</option>
           <option value="121">Warszawa 121</option>
           <option value="122">Kraków 122</option>
           <option value="123">Gdańsk 123</option>
           <option value="124">Bytom 124</option>
           <option value="125">Białystok 125</option>
           <option value="126">Łódź 126</option>
           <option value="127">Wrocław 127</option>
           <option value="128">Lublin 128</option>
           <option value="129">Siedlce 129</option>
    </select>

</div>

<div class="scope">
    <input type="radio" id="userScope"  name="scope" value="userScope" checked="true">
    <label for="userScope">Pracownik</label>
    <input type="radio" id="depScope" name="scope" value="depScope">
    <label for="depScope">Dział</label>
</div>
<div id="search">
    <form action="" method="post">
        <input type="text" name="user" id="user" oninput="search(this.value)" autocomplete="off"">
    </form>
    <ul id="dataViewer">
<!--        --><?php
//        foreach ($data as $i) {
//            $dn = $i['Displayname'];
//            $id = $i['id'];
//
//       echo "<li> <a href='visit.php?ID=$id'>". $dn."</a></li>";
//        }
//        ?>
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
