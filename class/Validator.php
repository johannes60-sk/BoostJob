<?php
    class Validator{

        protected $data;
        protected $errors = [];

        function __construct($data)
        {
            $this->data = $data;
        }

        public function getField($field){

            if(!isset($this->data[$field])){
                return null;
            }
            return $this->data[$field];
        }

        public function isAlphanumerique($field, $errorMsg){

            if(!isset($this->data[$field]) || !preg_match('/^[a-zA-Z0-9_]+$/', $this->getField($field))){
                $this->errors[$field] = $errorMsg;
            }
        }

        // Regular expression function

        public function regularExpressions($field, $regex, $errorMsg){

            if(!isset($this->data[$field]) || preg_match($regex, $this->getField($field))){

                $this->errors[$field] = $errorMsg;
            }

        }
         
        // Verifie que l'utilisateur n'existe pas deja dans la BDD

        public function isUniq($field, $db, $table, $errorMsg){

            $user = $db->query("SELECT id FROM $table WHERE $field = ? ", [$this->getField($field)])->fetch();

            if($user){
                $this->errors[$field] = $errorMsg;
            }

        }

        // Verifie que l'email entre est correct

        public function isEmail($field, $errorMsg){

            if(!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)){

                $this->errors[$field] = $errorMsg; 
            }

        }

        //Veridie que le mot de passe est correct

        public function passwordVerify($db, $input_password, $table, $field, $errorMsg){

            $email =  $this->getField($field);

            $admin = [
                'email' => $email
            ];

            // var_dump($email); die();

            $password = $db->query("SELECT password FROM $table WHERE email = :email", $admin )->fetch();

            if($password['password'] != $input_password){

                $this->errors[$field] = $errorMsg;

            }
        }

        // Verifie qu'aucune erreur ne s'est produite

        public function isValid(){

            if(empty($this->errors)){
                return true;
            }
        }

        //Retourne les erreurs 

        public function getErrors(){

            return $this->errors;
        }
    }

?>