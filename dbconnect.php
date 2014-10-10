<?php

class dbconnect {
	//consider a singleton model ?
    private $con;
    public $sql;

    function __construct(){

		//$con=mysqli_connect("localhost","root","accuris", "webstore");

    }

    function query($sql){

    }

    function fetch($result=""){

    }

    function __destruct(){

    }
}

?>