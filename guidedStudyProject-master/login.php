<?php
    class milktea {
        private $server ="mysql:host=localhost;dbname=milktea";
        private $user = "root";
        private $password = "";
        private $options = array(
            PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    protected $connection;

    public function openConnection(){
        try {
             $this->con = new PDO (
                 $this->server,
                 $this->user,
                 $this->password,
                 $this->options
             );
            //  echo "connection success!";
             return $this->con;
        } catch (PDOException $error) {
            echo "Error connection: ".$error->getMessage();
        }
    }

    public function closeConnection(){
        $this->$connection =null;
    }

    public function getUsers(){
        $connection = $this->openConnection();
        $statement = $connection->prepare("SELECT * FROM users");
        $statement -> execute();
        $user = $statement -> fetchAll();
        $userCount = $statement-> rowCount();

        if ($userCount > 0){
            return $user;
        }else{
            return 0;
        }
    }

// login function

    public function register(){

        if(isset($_POST['register'])){
            $fullname = $_POST['name'];
            $email = $_POST['emailNew'];
           $password =password_hash($_POST['psw'],PASSWORD_DEFAULT);
           // $password = $_POST['psw'];
            echo $password;
            $connection = $this->openConnection();
            $statement = $connection->prepare("INSERT INTO users (fullname,email,password) VALUES ('".$fullname."','".$email."','".$password."')");
            $statement -> execute ([$fullname,$email,$password]);
            // $user = $statement->fetch();
            $total = $statement->rowCount() ;
            echo "<br>".$total;

             if ($total > 0){
                    // echo "Successful";
                    // return $users;
                    header ('sample.html');
            }else{
                    $message = "You don't have any account yet. Please register ";
                    // echo "<script> alert('$message');</script>";
                
            }
        }
    }

    public function login(){
           
            if(isset($_POST['login'])){
                $username = $_POST['email'];
                $password =password_hash($_POST ['password'],PASSWORD_DEFAULT);
                // $password = $_POST ['password'];
                // echo $password;
                // echo $this->register()->$password;
                $connection = $this->openConnection();
                $statement = $connection->prepare ("SELECT * FROM 
                users WHERE email=? AND password =?");
                $statement -> execute ([$username,$password]);
                $user = $statement->fetch();
                $total = $statement->rowCount() ;

                if ($total > 0){
                    header ('location:sample.html');
                }else{
                    echo "<br>login failed";
                    $message = "You don't have any account yet. Please register ";
                    // echo "<script> alert('$message');</script>";
                
                }
            }
            
        }
        
    }
    $milktea = new milktea();



?>