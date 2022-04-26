<?php
class DatabaseAuth
{

    protected $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    // Hashage du mot de passe

    public function hashPassword($password)
    {

        return hash('sha512', $password);
    }

    // Generateur aleatoir de chaine de caractere

    public function random($length)
    {

        $alphabet = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";

        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

    // inscription de l'utilisateur dans la DB

    public function register($pseudo, $email, $password, $table)
    {

        // var_dump($pseudo, $email ); die();

        $user = [
            'pseudo' => $pseudo,
            'email' => $email,
            'password' => $this->hashPassword($password),
        ];

        $this->db->query("INSERT INTO $table(pseudo, email, password) VALUES(:pseudo, :email, :password)", $user);

        $user_id = $this->db->lastInsertId();

        $host = $_SERVER['SERVER_NAME'];

        $token = $this->random(100);

        mail($email, 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://" . $host . "/BoostJob/pages/confirm.php?id=$user_id&token=$token");
    }

    // Connexion de l'utilisateur

    public function login($pseudo, $table)
    {

        $user = $this->db->query("SELECT * FROM $table WHERE (pseudo = :pseudo OR email = :pseudo)", ['pseudo' => $pseudo])->fetch();

        if ($user) {

            return true;
        } else {

            echo "<h1  style='color: red; text-align:center'>Utilisateur inexistant ! Bonne journee</h1>";
        }
    }

   
}
