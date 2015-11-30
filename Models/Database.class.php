<?php

class Database{

    protected $bdd;
    private $engine;
    private $host;
    private $database;
    private $user;
    private $password;

    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'PMU';
        $this->user = 'root';
        $this->password = '';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        $this->bdd = new PDO( $dns, $this->user, $this->password );
    }

} 