<?php
/**
 * Database connection
 */


 class Database
 {
    private function connect()
    {
        $db = DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME;
        if(!$conn = new PDO($db, DBUSER, DBPASS)){
            die("Cold not connect to database");
        }

        return $conn;
    }

    public function run($query, $data = array(), $data_type = "object")
    {
        $conn = $this->connect();
        $stm = $conn->prepare($query);

        if($stm){
            $check = $stm->execute($data);
            if($check){
                if($data_type == "object"){
                   $data = $stm->fetchAll(PDO::FETCH_OBJ);
                }else{
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }
                if(is_array($data) && count($data) > 0){
                    return $data;
                }
            }
        }

        return false;
    }
 }