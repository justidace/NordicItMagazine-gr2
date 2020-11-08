<?php
    class db {
    
      private $login = 'root';
      private $pass = ''; 
      private $name_base = 'mag';
      
      function connect($host) {
        $link = new mysqli( $host, $this->login, $this->pass, $this->name_base );
        return $link;
      }
      function extendConnect($host) {
        $link = new mysqli( $host, $this->login, $this->pass, $this->name_base );
        return $link;
      }

      function __construct($host='') {
        return $this -> connect($host);
      }
    } 

//подключения c конструктором
//$test = new db('localhost');

//подключения без конструкта
//$test = new db();
//$test -> connect('localhost');
