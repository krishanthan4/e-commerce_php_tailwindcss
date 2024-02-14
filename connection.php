<?php 

class Database{

   public $config;
    public $connection ;

    function __construct(){
        $this->config=  include "config.php";
        $this->connection = new mysqli($config["hostname"],$config["username"]="root",$config["password"]="Abcd!234",$config["database"],$config["port"]);

        if($this->connection->connect_error){
die("Connection Failed :" . $this->connection->connect_error);
        }

    }

    function search($query){
return $this->connection->query($query);


    }
    function UID($query){
        $this->connection->query($query);

    }
}

?>