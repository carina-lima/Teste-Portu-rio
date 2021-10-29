<?php

use \PDO;

class DatabaseConnection {

    /**
     * Hostname do banco de dados
     * 
     * @var $host string
     */
    private $host;

    /**
     * O nome do banco de dados
     * 
     * @var $database string
     */
    private $database;

    /**
     * Nome de usuário do banco de dados
     * 
     * @var $username string
     */
    private $username;

    /**
     * Senha do usuário do banco de dados
     * 
     * @var $password string
     */
    private $password;

    /**
     * Construtor da classe
     */
    public function __constructor()
    {
        $this->host     = DB_HOST;
        $this->database = DB_NAME;
        $this->username = DB_USER;
        $this->password = DB_PASS;
    }

    /**
     * Retorna uma instância do banco de dados
     * 
     * @return PDO
     */
    public function getInstance() {
  
      $connectionString = "mysql:host='{$this->host}';dbname='{$this->database}';charset=utf8";

      $PDO = new PDO($connectionString, $this->username, $this->password);
	
      return $PDO;
    }
  
}