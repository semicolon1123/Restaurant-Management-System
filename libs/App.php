<?php 
    
    class App{
        public $host = HOST;
        public $dbname = DBNAME;
        public $user = USER;
        public $pass = PASSWORD;

        public $link;

        // Create a Constructor

        public function __construct(){

            $this->connect();
        }

        public function connect(){
            $this->link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname."", $this->user, $this->pass);

            // if($this->link){
            //     echo "db connection is working";
            // }
        }

        // Select all
        public function selectAll($query){
            $rows = $this->link->query($query);
            $rows->execute();

            $allRows = $rows->fetchAll(PDO::FETCH_OBJ);

            if($allRows){
                return $allRows;
            } else {
                return false;
            }
        }


        // Select one row
        public function selectOne($query){
            $row = $this->link->query($query);
            $row->execute();

            $singleRow = $row->fetch(PDO::FETCH_OBJ);

            if($singleRow){
                return $singleRow;
            } else {
                return false;
            }
        }


        // Validating items in the Cart
        public function validateCart($q){
            $row = $this->link->query($q);
            $row->execute();
            $count = $row->rowCount();
            return $count;
        }

        // Insert query
        public function insert($query, $arr, $path){
            if($this->validate($arr) == "empty"){
                echo "<script>alert('one or more inputs are empty') </script>";
            } else {
                $insert_record = $this->link->prepare($query);
                $insert_record->execute($arr);

                echo "<script> window.location.href='".$path."' </script>";
            }
        }

        // Update query
        public function update($query, $arr, $path){
            if($this->validate($arr) == "empty"){
                echo "<script>alert('one or more inputs are empty') </script>";
            } else {
                $update_record = $this->link->prepare($query);
                $update_record->execute($arr);

                header("location: ".$path."");
            }
        }

        // Delete query
        public function delete($query, $path){
            
            $delete_record = $this->link->query($query);
            $delete_record->execute();

            echo "<script> window.location.href='".$path."' </script>";
        }

        public function validate($arr){
            if(in_array("", $arr)){
                echo "empty";
            }
        }

        public function register($query, $arr, $path){
            if($this->validate($arr) == "empty"){
                echo "<script>alert('one or more inputs are empty') </script>";
            } else {
                $register_user = $this->link->prepare($query);
                $register_user->execute($arr);

                header("location: ".$path."");
            }
        }

        public function login($query, $data, $path){

            // email validation
            $login_user = $this->link->query($query);
            $login_user->execute();

            $fetch = $login_user->fetch(PDO::FETCH_ASSOC);

            if($login_user->rowCount() > 0){

                // password validation
                if(password_verify($data['password'], $fetch['password'])){

                    $_SESSION['email'] = $fetch['email'];
                    $_SESSION['username'] = $fetch['username'];
                    $_SESSION['user_id'] = $fetch['id'];

                    // start session vars
                    header("location: ".$path."");
                }
            }
        }

        // starting session
        public function startingSession(){
            session_start();
        }

        // validating sessions
        public function validateSession(){
            if(isset($_SESSION['user_id'])){
                echo "<script> window.location.href='".APPURL."' </script>";
            }
        }

        public function validateAdminSession(){
            if(isset($_SESSION['email'])){
                echo "<script> window.location.href='".ADMIN_URL."/admin-panel/index.php' </script>";
            }
        }

        public function validateAdminSessionInside(){
            if(!isset($_SESSION['email'])){
                echo "<script> window.location.href='".ADMIN_URL."/admins/login-admins.php' </script>";
            }
        }
    }

    