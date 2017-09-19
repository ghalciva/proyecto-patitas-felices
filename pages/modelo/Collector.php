<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-107-20-250-195.compute-1.amazonaws.com");
define("DB_USER", "bbxrwwiagqqvan");
define("DB_PASS", "87c50069d56da5ef0c02ef5f735a401f9f81c7310bd8687745ae370c49335a88");
define("DB_NAME", "dd8drr1aot2ujr");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
