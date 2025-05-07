<?php
session_start();
class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "crudphp";
        $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        return $conn;
    }
}
class Query extends Database{
    public function getData($tableN,$fields){
        $sql = "SELECT $fields FROM $tableN";
        $result = $this -> connect()->query($sql);
        return $result;
    }
    public function insertData($tableN,$parameter){
        $field=array();
        $val = array();
        foreach($parameter as $key => $value){
            $field[]=$key;
            $val[]=$value;
        }
        $field = implode(",",$field);
        $val = implode("','",$val);
        $val = "'".$val."'";    
        $sql = "INSERT INTO $tableN ($field) VALUES ($val)";
        $result = $this -> connect()->query($sql);
        return $result;
    }
    public function deleteData($tableN,$field,$id){
        $sql = "DELETE FROM $tableN WHERE $field=$id";
        $result = $this -> connect()->query($sql);
        return $result;
    }
    public function getDataById($tableN, $fields,$field,$id){
        $sql = "SELECT $fields FROM $tableN WHERE $field = $id";
        $result = $this -> connect()->query($sql);
        return $result;
    }
    public function updateData($tableN,$parameter,$fieldD,$id){
        $field=array();
        $val = array();
        $sql = "UPDATE $tableN SET ";
        $parLenght = count($parameter);
        $i=1;
        foreach($parameter as $key => $value){
            if($i==$parLenght){
                $sql .= "$key = '$value'";
            }else{
                $sql .= "$key = '$value', ";
                $i++;
            }
        }
        $sql =$sql." WHERE $fieldD = $id";  
        $result = $this -> connect()->query($sql);
        return $result;
    }
}
?> 