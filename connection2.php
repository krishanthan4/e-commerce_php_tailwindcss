<?php

class Database{

    public static $connection;

    public static function setUpConnection(){
        if(!isset(Database::$connection)){
            Database::$connection = new mysqli("localhost", "root", "Abcd!234", "eshop", "3306");
        }
    }

    private static function detectParamType($param){
        switch (gettype($param)) {
            case 'integer':
                return 'i';
            case 'double':
                return 'd';
            case 'string':
            default:
                return 's';
        }
    }

    private static function bindParams($stmt, $params){
        $types = '';
        $bindParams = array();

        foreach ($params as $param) {
            $types .= self::detectParamType($param);
            $bindParams[] = $param;
        }

        if (!empty($bindParams)) {
            $stmt->bind_param($types, ...$bindParams);
        }
    }

    public static function iud($q, $params = array()){
        Database::setUpConnection();
        $stmt = Database::$connection->prepare($q);

        if ($stmt === false) {
            return false;
        }

        if (!empty($params)) {
            self::bindParams($stmt, $params);
        }

        $stmt->execute();
        $stmt->close();

        return true;
    }

    public static function search($q, $params = array()){
        Database::setUpConnection();
        $stmt = Database::$connection->prepare($q);

        if ($stmt === false) {
            // Handle error
            return false;
        }

        if (!empty($params)) {
            self::bindParams($stmt, $params);
        }

        $stmt->execute();
        $resultset = $stmt->get_result();
        $stmt->close();

        return $resultset;
    }
}

?>
