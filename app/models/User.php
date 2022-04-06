<?php 
    class User{
        private $db;

        public function __construct(){
            $this->db = new Database; //Instantiate Database
        }

        public function register($data){
            $this->db->query('INSERT INTO users (firstname, lastname, email, password, priviledge) VALUES (:firstname, :lastname, :email, :password, :priviledge)');
            //Bind Values
            $this->db->bind(':firstname', $data['firstname']);
            $this->db->bind(':lastname', $data['lastname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':priviledge', $data['priviledge']);
            //when it word execute this function
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function login($email, $password){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            //bind value
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            //$hashedPassword = !empty($row) ? $row->password'';
            if($this->db->rowCount() > 0){
                $hashedPassword = $row->password;
                if (password_verify($password, $hashedPassword)) {
                    return $row;
                } else{
                    return false;
                }
            } else{
                return false;
            }
        }

        //find email. email passed in by the controller
        public function findUserByEmail($email){
            //prepared statement
            $this->db->query('SELECT * FROM users WHERE email = :email');
            // email param will be binded w/ the email variable
            $this->db->bind(':email', $email);
            //check if email exist
            if($this->db->rowCount() > 0){
                return true;
            } else{
                return false;
            }
        }

        public function checkAdmin($email){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            //bind value
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            //$hashedPassword = !empty($row) ? $row->password'';
            if($this->db->rowCount() > 0){
                $priviledge = $row->priviledge;
                if ($priviledge=='Admin') {
                    return $row;
                } else{
                    return false;
                }
            } else{
                return false;
            }
        }

        public function admincreateroom($data){
            $this->db->query('INSERT INTO users (name, description) VALUES (:name, :description)');
            //Bind Values
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':description', $data['description']);
            //when it word execute this function
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }
    }
?>