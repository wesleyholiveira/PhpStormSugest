<?php

class Db extends DbCore {

    /**
     * Open a connection
     */
     public function connect(){}

    /**
     * Close a connection
     */
     public function disconnect(){}

    /**
     * Execute a query and get result resource
     *
     * @param string $sql
     * @return mixed
     */
     protected function _query($sql){}

    /**
     * Get number of rows in a result
     *
     * @param mixed $result
     */
     protected function _numRows($result){}

    /**
     * Get the ID generated from the previous INSERT operation
     */
     public function Insert_ID(){}

    /**
     * Get number of affected rows in previous database operation
     */
     public function Affected_Rows(){}

    /**
     * Get next row for a query which doesn't return an array
     *
     * @param mixed $result
     */
     public function nextRow($result = false){}

    /**
     * Get database version
     *
     * @return string
     */
     public function getVersion(){}

    /**
     * Protect string against SQL injections
     *
     * @param string $str
     * @return string
     */
     public function _escape($str){}

    /**
     * Returns the text of the error message from previous database operation
     */
     public function getMsgError(){}

    /**
     * Returns the number of the error from previous database operation
     */
     public function getNumberError(){}

    /* do not remove, useful for some modules */
     public function set_db($db_name){}

     public function getBestEngine(){}
    
}