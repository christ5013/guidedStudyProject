
<?php
session_start();

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
                
                return $this->con;
            } catch (PDOException $error) {
                echo "Error connection: ".$error->getMessage();
            }
        }

        public function closeConnection(){
            $this->$connection =null;
        }

     //check if the user is already log in
        function check_login(){

            
            if($_SESSION['email'] != ""){
                $id = $_SESSION['email'];
                $connection = $this->openConnection();
                    $emailVer = $connection->prepare("SELECT * FROM users WHERE email = ? ");
                    $emailVer->execute([$id]);
                    $passwordVar = $emailVer->fetch();
                    return $passwordVar;
            }else{
                header("location:form.php");
            }

        //     //redirect to login
        //    die;
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
                $email = $_POST['regEmail'];
                $password =password_hash($_POST['regPass'],PASSWORD_DEFAULT);

                $connection = $this->openConnection();

                if($_POST['regPass'] != $_POST['confirmPass']){

                    echo "<script>alert('password did not match!')</script>";

                }else{

                    $statement = $connection->prepare("INSERT INTO users (fullname,email,password) VALUES ('".$fullname."','".$email."','".$password."')");
                    $statement -> execute ([$fullname,$email,$password]);
                    echo "<script>alert('Please login first')</script>";
                   // header ('location:form.php');
    
                }

                
            }
        }

        public function login(){
            
                if(isset($_POST['login'])){
                    $username = $_POST['username'];

                    $password = $_POST ['loginPass'];
                    // echo $password;
                    // echo $this->register()->$password;
                    $connection = $this->openConnection();

                    $emailVer = $connection->prepare("SELECT * FROM users WHERE email = ? ");
                    $emailVer->execute([$username]);
                    $passwordVar = $emailVer->fetch();

                    if(password_verify($password, $passwordVar['password'])){
                        $_SESSION['email'] = $username;
                        header ('location:landing.php');
                    }else{
                        echo "<script>alert('Wrong Credentials!')</script>";
                        //header ('location:form.php');
                    }
                
                }
                
        }
        public function logout(){
            $_SESSION['email'] = "";
            echo "form.php?logout=true";

            // if (isset($_GET["logout"])) {
            //     session_destroy();
            //     // header("location:form.php?logout=true");
            //     // exit;
            // }
        }
    }

    $milktea = new Milktea();



?>
    
