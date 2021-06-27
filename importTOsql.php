<?php
if (isset($_POST['import'])) {

    include "connect.php";
//drop base
    $dropQuery = "DROP   table usersTest";
    mysqli_query($db, $dropQuery);
//create base
    $createQuery = "CREATE TABLE `usersTest` ( `id` INT(4) NOT NULL AUTO_INCREMENT , `FirstName` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `LastName` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `Displayname` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `Market` INT(4) NULL , `Description` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `Login` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `Title` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `Department` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `Manager` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `City` VARCHAR(20) NULL , `EmployeeID` INT(10) NULL , `Mail` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_polish_ci NULL , `OficePhone` VARCHAR(20) NULL , `MobilePhone` VARCHAR(15) NULL ,`Office` VARCHAR(25) NULL ,`Grupy` VARCHAR(400) NULL, PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    mysqli_query($db, $createQuery);
//import data

    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES['file']['size']>0) {
        $file = fopen($fileName,'r');
            while  (($column = fgetcsv($file,1000,';')) !==false )  {


          $insertQuery= "INSERT INTO `userstest`(`FirstName`, `LastName`, `Displayname`, `Market`, `Description`, `Login`, `Title`, `Department`, `Manager`, `City`, `EmployeeID`, `Mail`, `OficePhone`, `MobilePhone`,`Office`,`Grupy`) VALUES ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."','".$column[6]."','".$column[7]."','".$column[8]."','".$column[9]."','".$column[10]."','".$column[11]."','".$column[12]."','".$column[13]."','".$column[14]."','".$column[15]."')";


                mysqli_query($db,$insertQuery);

            }

    }
}

?>

