<?php
class DB{

    public $con;
    protected $servername ="localhost";
    protected $username = "test";
    protected $password ="test";
    protected $dbname ="mvc";

    function __construct() {
        $this->con = mysqli_connect($this->servername, $this->username,$this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con,"SET NAMES 'utf8'");

    }
}
?>