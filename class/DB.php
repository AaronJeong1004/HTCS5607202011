<?php


class DB
{
    var $conn;
    var $servername = "fugfonv8odxxolj8.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    var $dbusername = "jw97kpjvty7iaor4";
    var $dbpassword = "f6vusv6az7kr5rge";
    var $dbname = "cp7e0ihz7ifwhk2l";

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $conn = new mysqli($this->servername, $this->dbusername, $this->dbpassword, $this->dbname);
        if (!$conn->connect_error);{
            $this->conn =$conn;
    }
    }
}