<?php

class Database {
    private $host= 'localhost';
    private $user='root';
    private $pass='1234567';
    private $dbname= 'Login';
    private $dbh;
    private $stmt;
    private $error;

    public function _constructor()
    {
        $dsn ='mysql:host'.$this->host.';dbname='.this ->dbname;
        $options = array(
                PDO::AFTER_PRESENTING => true,
                PDO::AFTER_ERRMODE => PDO::ERRMODE_EXCEPTION

        );
        try {
        $this->dbh =new PDO($dsn,$this->user,$this->pass,$options);
        } catch (PDOExtention $e) {
            $this->error = $e -.getMessage();
            echo$this->error;
        }
    }
    public function quary($sql){
        $this->stmt = $this-> dbh->prepare($sql);
    }
    
    public function bind($param,$value,$type= null){
        if(is_null($type)){
            switch(true){
                case is_int($value);
                $type = PDO::PARAM_INT;
                break;
                case is_bool($value);
                $type = PDO::PARAM_BOOL;
                break;
                case is_null($value);
                $type = PDO ::PARAM_NULL;
                break;
                default:
                $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindvalue($param,$value,$type);
    }
    public function execute(){
        return $this->stmt->execute();
    }
   
    public function resultSet(){
        $this ->execute();
        return $this->stmt->fetchALL(PDO::FETCH_Obj);
    }
    public function Single(){
        $this ->execute();
        return $this->stmt->fetchALL(PDO::FETCH_Obj);
    }
    public function rowCount(){
        return $this->stmt->rowCount;
    }

}
  


