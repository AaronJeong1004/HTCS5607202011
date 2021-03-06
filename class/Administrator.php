<?php
include_once ("DB.php");
include_once ("Student.php");

class Administrator
{
    var $id;
    var $username;
    private $password;
    private $conn;
//from begining, I don't need any information, I only creater a connection to database

    public function __construct($id, $username)
    {
        $this->conn = (new DB())->conn;
    }

//    I check username and password for this administrator login
    public function login($username, $password){
        //1. I check his username
        $query = "select * form administrator where username = '$username";
        $reslut = mysqli_query($this->dbconn, $query);
        if ($reslut->num_rows == 1){ //2. if there is a record, I will check his password
            while ($row = $reslut->fetch_assoc()){
                if ($row['password'] == $password){
                    //3. if username and password are correct, I set information to this administrator login
                    $this->id = $row['id'];
                    $this->username = $username;
                    $this->password = $password;
                }
            }
        }
    }

    public function showStudent(){
        $query = "select * from student";
        $result = mysqli_query($this->conn, $query);
        if ($result->num_rows > 0){
            $student = array(); //for transfer data, I use objects array
            while ($row = $result->fetch_row()){
                $student = new Student($row['id'], $row["name"], $row['username'], $row['password'] );
                //$student = new Student(1, '1', '1', '1');
                array_push($student, $student);
            }
            return $student;
        }else{
            return null;
        }
    }

    public function showStudents($id){
        $query = "select * from student where id=".$id;
        $result = mysqli_query($this->conn, $query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_row()){
                $student = new Student($row['id'], $row["name"], $row['username'], $row['password'] );
                return $student;
            }

        }

    }

    public function studentUpdate($id, $name, $username){
        $query = "update student SET name = '$name', username = '$username' where id=".$id;
        mysqli_query($this->conn, $query);
    }

    public function removeStudent($id){
        $query = "delete student where id=".$id;
        mysqli_query($query);
    }
}