<?php

class Database {

    // Initialize variables
    protected $sDB;
    protected $sHost;
    protected $sUsername;
    protected $sPassword;
    protected $sDatabase;


    public function __construct($sHost, $sUsername, $sPassword, $sDatabase){

      $this->sHost     = $sHost;
      $this->sUsername = $sUsername;
      $this->sPassword = $sPassword;
      $this->sDatabase = $sDatabase;

      $this->_connection();

    }

    public function _connection(){
        return $this->sDB = mysqli_connect($this->sHost, $this->sUsername, $this->sPassword, $this->sDatabase) or die ('no connection');
    }

}
