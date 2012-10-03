<?php

class Session
{
    
    /**
     * a database connection resource
     * @var resource
     * @var maximo
     */
    private $_sess_db;
    private $max;

    /**
     * Open the session
     * @return bool
     */
    public function __construct()
    {
        session_set_save_handler(
            array($this, "open"),
            array($this, "close"),
            array($this, "read"),
            array($this, "write"),
            array($this, "destroy"),
            array($this, "gc")
        );
        $this->max = 60;
        //register_shutdown_function('session_write_close');
    }

    
    public function open()
    {
        $servidor = "localhost";	$usuario = "root";	$password = "gpi123"; $bd   = "inventariooseo";
        if ($this->_sess_db = mysqli_connect($servidor, $usuario, $password, $bd))
        {
            return true;
        }
        return false;
    }

    /**
     * Close the session
     * @return bool
     */
    public function close() {
        return mysqli_close($this->_sess_db);
    }

    /**
     * Read the session
     * @param int session id
     * @return string string of the sessoin
     */
    public function read($id)
    {
        $query = "SELECT `data` FROM `sessions` WHERE `id` = '".$this->_sess_db->escape_string($id)."'";
        $resultado = mysqli_query($this->_sess_db, $query);
        $row = mysqli_fetch_assoc($resultado);
        return $row['data'];
    }

    /**
     * Write the session
     * @param int session id
     * @param string data of the session
     */
    public function write($id, $data)
    {
        $this->_sess_db->query("REPLACE INTO `sessions` VALUES
                      ('".$this->_sess_db->escape_string($id)."',
                       '".$this->_sess_db->escape_string($data)."',
                       '".$this->_sess_db->escape_string(time())."')");
        return true;
    }

    /**
     * Destoroy the session
     * @param int session id
     * @return bool
     */
    public function destroy($id)
    {
        $sql = "DELETE FROM `sessions` WHERE `id` = '".$this->_sess_db->escape_string($id)."'";
        return mysqli_query( $this->_sess_db, $sql);
    }

    /**
     * Garbage Collector
     * @param int life time (sec.)
     * @return bool
     * @see session.gc_divisor      100
     * @see session.gc_maxlifetime 1440
     * @see session.gc_probability    1
     * @usage execution rate 1/100
     *        (session.gc_probability/session.gc_divisor)
     */
    public function gc($max)
    {
        $sql = "DELETE FROM `sessions` WHERE `timestamp` < '".mysqli_real_escape_string(time() - $max)."'";
        return mysqli_query( $this->_sess_db, $sql);
    }

}