<?php

    class Milktea {
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

    // //check if the user is already log in
    // function check_login(){

    //     if(isset($_SESSION['email'])){
    //         $id = $_SESSION['email'];
    //         $query = "SELECT * FROM users WHERE email = '$id' limit 1 ";
    //         $result = mysql_query($connection,$query);

    //         if ($result && mysqli_num_rows ($result)>0){
    //             $user_data = mysqli_fetch_assoc($result);
    //             return $user_data;
    //         }
           
    //     }

    //     //redirect to login
    //     //header("location:form.php");
    //    // die;
    // } 

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
            $email = $_POST['regEmail'];
           //$password =password_hash($_POST['regPass'],PASSWORD_DEFAULT);
            $password = $_POST['regPass'];
            $connection = $this->openConnection();
            $statement = $connection->prepare("INSERT INTO users (fullname,email,password) VALUES ('".$fullname."','".$email."','".$password."')");
            $statement -> execute ([$fullname,$email,$password]);
            // $user = $statement->fetch();
            $total = $statement->rowCount() ;
            

             if ($total > 0){
                    // echo "Successful";
                    // return $users;
                    header ('location:form.php');
            }else{
                    $message = "You don't have any account yet. Please register ";
                    // echo "<script> alert('$message');</script>";
                
            }
        }
    }

    public function login(){
           
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                //$password =password_hash($_POST ['loginPass'],PASSWORD_DEFAULT);
                 $password = $_POST ['loginPass'];
                // echo $password;
                // echo $this->register()->$password;
                $connection = $this->openConnection();
                $statement = $connection->prepare ("SELECT * FROM 
                users WHERE email=? AND password = ?");
                $statement -> execute ([$username,$password]);
                $user = $statement->fetch();
                $total = $statement->rowCount() ;

                if ($total > 0){
                    echo header ('location:landing.php');
                }else{
                    echo "<br>login failed";
                    $message = "You don't have any account yet. Please register ";
                    // echo "<script> alert('$message');</script>";
                
                }
            }
            
        }
        public function logout(){
            if (isset($_GET["logout"])) {
                session_destroy();
                header("location:form.php?logout=true");
                exit;
            }
        }
    }

    $milktea = new Milktea();



?>