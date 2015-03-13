<?php
/*
 * added by Keramatifar
 * Edited by Ali Sharifi 93-12-20
 */
// Class providing generic data access functionality
class MysqlDBHandler
{
    private static $connection;
    private function __construct(){}
    private static function convertPersianWord($item)
    {
        return str_replace(array('ي', 'ك'), array('ی', 'ک'), $item);
    }
    private static function convertPersianWords($arrayParams)
    {
        foreach ($arrayParams as $key => $value) {
            $arrayParams[$key] = self::convertPersianWord($value);
        }
        return $arrayParams;
    }
    public static function open()
    {
        // Create a database connection only if one doesn?t already exist
        if (!isset(self::$connection)) {
            // Execute code catching potential exceptions
            try {
                // Create a new PDO class instance
                self::$connection =
                    new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD,
                        array(PDO::ATTR_PERSISTENT => DB_PERSISTENCY, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                // Configure PDO to throw exceptions
                self::$connection->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $pdoException) {
                self::close();
                throw $pdoException;
            }
        }
    }
    public static function close()
    {
        self::$connection = null;
    }
    // Wrapper method for PDOStatement::execute()
    public static function execute($sqlQuery, $params = null)
    {
        self::open();
        try {
            $preparedToExecute = self::$connection->prepare('SET NAMES UTF8;' . $sqlQuery);
            $result = $preparedToExecute->execute($params);
            self::close();
            if ($result == 1) return true;
            return false;
        }
        catch (PDOException $pdoException) {
            self::close();
            throw $pdoException;
        }
    }


    // SELECT * FROM users
    // Wrapper method for PDOStatement::fetchAll()
    public static function getAll($sqlQuery, $params = null,
                                  $fetchStyle = PDO::FETCH_ASSOC)
    {
        self::open();
        $result = null;
        try {
            $preparedToExecute = self::$connection->prepare($sqlQuery);
            $preparedToExecute->execute($params);
            $result = $preparedToExecute->fetchAll($fetchStyle);
        }
        catch (PDOException $pdoException) {
            self::close();
            throw $pdoException;
        }
        return $result;
    }
    // SELECT * FROM users WHERE id = 1;
    // Wrapper method for PDOStatement::fetch()
    public static function getRow($sqlQuery, $params = null,
                                  $fetchStyle = PDO::FETCH_ASSOC)
    {
        $result = array();
        try {
            self::open();
            $preparedToExecute= self::$connection->prepare($sqlQuery);
            $preparedToExecute->execute($params);
            $result = $preparedToExecute->fetch($fetchStyle);
        }
        catch (PDOException $pdoException) {
            self::close();
            throw $pdoException;
        }
        return $result;
    }
    //SELECT username FROM users WHERE id = 1
    // Return the first column value from a row
    public static function getOne($sqlQuery, $params = null)
    {
        $result = null;
        try {
            self::open();
            $preparedToExecute = self::$connection->prepare($sqlQuery);
            $state_handlent_handler->execute($params);
            $result = $statement_handler->fetch(PDO::FETCH_NUM);
            $result = $result[0];
        }
        catch (PDOException $pdoException) {
            self::close();
            throw $pdoException;
        }
        return $result;
    }
}
?>
