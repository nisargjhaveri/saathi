<?php
class Model {

    /**
    * Contains DB connection or false
    * @var bool|mysqli
    */
    private $DB = false;

    function __construct() {
    }

    /**
     * Connect to mysql DB, using mysqli
     */
    private function _load_db() {
        $this->DB = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->DB->connect_errno) {
            //echo "Failed to connect to MySQL: " . $this->DB->connect_errno;
            $this->DB = false;
            return false;
        }
        $this->DB->set_charset("utf8");
    }

    public function __get($var) {
        switch ($var) {
            case "DB":
                if (!($this->DB)) $this->_load_db();
                break;
        }
        return $this->$var;
    }

}
