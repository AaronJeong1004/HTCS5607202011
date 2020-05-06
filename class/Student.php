<?php


class Student
{
    var $id;
    var $name;
    var $username;
    var $password;
    var $dbconn;

    public function  __construct($id, $name, $username, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->dbconn = new DB();
    }
    public  function save(){
        if (is_null($this->id)){
            $query = "insert into student values (null, '$this->name', 'this->password')";
            echo $query;
            mysqli_query($this->dbconn, $query);
        }else{
            $query = "Update student SET name = '$this->name' where id = $this->id";
            mysqli_query($query);
        }
    }
}