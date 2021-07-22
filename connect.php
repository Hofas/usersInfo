<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$name_db = "usersInfo";

$db = mysqli_connect($host_db,$user_db,$pass_db,$name_db);

class DB {
    private $con;
    private $host_db = "localhost";
    private $user_db = "root";
    private $pass_db = "";
    private $name_db = "usersInfo";
    private $char_db = "utf8";

    public function __construct()
    {
        $dsn = "mysql::host=".$this->host_db.";dbname=".$this->name_db.";charset=".$this->char_db;

        try {
            $this->con = new PDO($dsn,$this->user_db,$this->pass_db);//,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//            echo "connect OK";
        }
            catch (PDOException $e) {
            echo "Etwas Wrong ". $e->getMessage();};


    }

public function viewData() {
        $selectQuery = "SELECT Displayname , id FROM usersTest";
        $stmt = $this->con->prepare($selectQuery);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

public function  searchData($name) { //dorobić param market i w zapytaniu where Market = $market
        $selectQuery = "SELECT Displayname, id from usersTest WHERE Displayname LIKE '%".$name."%'"; //:name
        $stmt = $this->con->prepare($selectQuery);
        $stmt->execute();   //$stmt->execute(["name" => "%".$name."%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
       }

public function getUser($id){
        $selectQuery = "SELECT * FROM usersTest WHERE id = $id";
        $stmt = $this->con->prepare($selectQuery);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
       }

    public function searchDep($dep){ //dorobić param market i w zapytaniu where Market = $market
        $selectQuery = "SELECT DISTINCT Department FROM usersTest WHERE Department LIKE '%".$dep."%'";
        $stmt = $this->con->prepare($selectQuery);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
public function searchUserByDep($dep){
        $selectQuery = "SELECT Displayname, Mail, OficePhone, MobilePhone FROM usersTest WHERE Department = '".$dep."'";
        $stmt= $this->con->prepare($selectQuery);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
