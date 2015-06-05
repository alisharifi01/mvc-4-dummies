<?php



class MysqlDBHandler implements DBHandler
{
    private  $connection;
    private  function convertPersianWord($item)
    {
        return str_replace(array('ي', 'ك'), array('ی', 'ک'), $item);
    }
    private  function convertPersianWords($arrayParams)
    {
        foreach ($arrayParams as $key => $value) {
            $arrayParams[$key] = $this->convertPersianWord($value);
        }
        return $arrayParams;
    }
    public  function open()
    {
        // Create a database connection only if one doesn?t already exist
        if (!isset($this->connection)) {
            // Execute code catching potential exceptions
            try {
                // Create a new PDO class instance
                $this->connection =
                    new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD,
                        array(PDO::ATTR_PERSISTENT => DB_PERSISTENCY, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                // Configure PDO to throw exceptions
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $pdoException) {
                $this->close();
                throw $pdoException;
            }
        }
    }
    public  function close()
    {
        $this->connection = null;
    }
    // Wrapper method for PDOStatement::execute()
    public  function execute($sqlQuery, $params = null)
    {
        $this->open();
        try {
            $preparedToExecute = $this->connection->prepare('SET NAMES UTF8;' . $sqlQuery);
            $result = $preparedToExecute->execute($params);
            $this->close();
            if ($result == 1) return true;
            return false;
        }
        catch (PDOException $pdoException) {
            $this->close();
            throw $pdoException;
        }
    }


    // SELECT * FROM users WHERE id > 5
    // Wrapper method for PDOStatement::fetchAll()
    public function getAll($sqlQuery, $params = null)
    {
        $fetchStyle = PDO::FETCH_ASSOC;
        $this->open();
        $result = null;
        try {
            $preparedToExecute = $this->connection->prepare($sqlQuery);
            $preparedToExecute->execute($params);
            $result = $preparedToExecute->fetchAll($fetchStyle);
        }
        catch (PDOException $pdoException) {
            $this->close();
            throw $pdoException;
        }
        return $result;
    }
    // SELECT * FROM users WHERE id = 1;
    // Wrapper method for PDOStatement::fetch()
    public  function getRow($sqlQuery, $params = null)
    {
        $fetchStyle = PDO::FETCH_ASSOC;
        $result = array();
        try {
            $this->open();
            $preparedToExecute= $this->connection->prepare($sqlQuery);
            $preparedToExecute->execute($params);
            $result = $preparedToExecute->fetch($fetchStyle);
        }
        catch (PDOException $pdoException) {
            $this->close();
            throw $pdoException;
        }
        return $result;
    }
    //SELECT username FROM users WHERE id = 1
    // Return the first column value from a row
    public  function getOne($sqlQuery, $params = null)
    {
        $result = null;
        try {
            $this->open();
            $preparedToExecute = $this->connection->prepare($sqlQuery);
            $preparedToExecute->execute($params);
            $result = $preparedToExecute->fetch(PDO::FETCH_NUM);
            $result = $result[0];
        }
        catch (PDOException $pdoException) {
            $this->close();
            throw $pdoException;
        }
        return $result;
    }
}
?>
