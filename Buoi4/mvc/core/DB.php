<?php
class DB{
    public $con;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $db = "ajax";

    function __construct(){
        $this->con = mysqli_connect(
            $this->servername,
            $this->username,
            $this->password
        );
        mysqli_select_db($this->con, $this->db);
    }
}
?>