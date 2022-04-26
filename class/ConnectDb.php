<?php

    class ConnectDb{

        protected $host = 'localhost';
        protected $database_name = 'Boostjob';
        protected $encodage = 'utf8';
        protected $database_username = 'root';
        protected $database_user_password = '';
        protected $driver = 'mysql';
        protected $db;
    
    
      function __construct()
      {

        try {
            $this->db = new PDO("$this->driver:host=$this->host;dbname=$this->database_name;charset=$this->encodage",$this->database_username, $this->database_user_password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch(PDOException $e) {
            die($e->getMessage());
          }
      }

      public function query($query, $data = false){
          if($data){

            $req = $this->db->prepare($query);
            $req->execute($data);

          }else{
              $req = $this->db->prepare($query);
              $req->execute();
          }

          return $req;
      }

      public function lastInsertId(){

        return $this->db->lastInsertId();
    }

        
    }
?>