<?php
class Sql {
    public $conn;
    public function __construct()
    {
        return $this->conn = mysqli_connect("localhost", "root", "", "hcode_shop");
    }

    public function query($string_query){
        return mysqli_query($this->conn, $string_query);
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}