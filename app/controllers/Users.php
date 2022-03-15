<?php 
class Users extends Controller{ //Takes care of the flow of the Users
    public function __construct(){
        $this->userModel = $this->model('User');
    }
    public function register(){
        $data = [
            'firstnameError' => '',
            'lastnameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmpasswordError' => '',
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'password' => '',
            'confirmpassword' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); //Uncoding unwanted characters
            $data = [
                'firstnameError' => '',
                'lastnameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmpasswordError' => '',
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmpassword' => trim($_POST['confirmpassword']),
                'priviledge' => 'Admin'
            ];//Gamit sa trim kai tangtangon ang spaces.
            $nameValidation = "/^[a-zA-Z]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
            //Validate firtname on letters
            if(empty($data['firstname'])){
                $data['firstnameError'] = 'Please enter firstname';
            } elseif(!preg_match($nameValidation, $data['firstname'])){
                $data['firstnameError'] = 'Firstname can only contain letters';
            }
            //Validate lastname on letters
            if(empty($data['lastname'])){
                $data['lastnameError'] = 'Please enter lastname';
            } elseif(!preg_match($nameValidation, $data['lastname'])){
                $data['lastnameError'] = 'Lastname can only contain letters';
            }
            //Validate Email
            if(empty($data['email'])){
                $data['emailError'] = 'Please enter email';
            } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                $data['emailError'] = 'Please Enter a Correct Format';
            } else{
                //check if email exist
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['emailError'] = 'Email is already taken';
                }
            }
            //Validate password on length and numeric values
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter password';
            } elseif(strlen($data['password'])<8){
                $data['passwordError'] = 'Password is atleast 8 characters';
            } elseif(preg_match($passwordValidation, $data['password'])){
                $data['passwordError'] = 'Password must have atleast one numberic value';
            }
            //Validate confirm password
            if(empty($data['confirmpassword'])){
                $data['confirmpasswordError'] = 'Please enter confirm password field';
            } else{
                if($data['password'] != $data['confirmpassword']){
                    $data['confirmpasswordError'] = 'Password does not match';
                }
            }
            //Make sure errors are empty
            if(empty($data['firstnameError']) && empty($data['lastnameError']) &&
            empty($data['emailError']) && empty($data['passwordError']) && 
            empty($data['confirmpasswordError'])){
                //HASH PASSWORD para di makita ni misis
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $data['password'] = $data['password'];
                //Register user from model function kung wlai errors
                if($this->userModel->register($data)){
                    header('location:' . URLROOT . '/users/login');
                } else{
                    die('Something Went wrong');
                }
            }
        }
        $this->view('users/register', $data);
    }
    public function login(){
        $data = [
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];
        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => ''
            ];
            //Validate email
            if(empty($data['email'])){
                $data['emailError'] = 'Please Enter your email';
            }
            
            //Validate password
            if(empty($data['password'])){
                $data['passwordError'] = 'Please Enter your password';
            }
            //check if all errors are empty
            if(empty($data['emailError']) && empty($data['passwordError'])){
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);   
                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                } else{
                    $data['passwordError'] = 'Credentials are incorrect';
                    $this->view('users/login', $data);
                }
            }
        } else{
            $data = [
                'email' => '', 
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];//empty ni if dli mo sulod.
        }
        $this->view('users/login', $data); //search for the file
    }
    public function createUserSession($user){ //basta mo login ang User kuhaon ni siya ang ID og Email
        $_SESSION['user_id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['lastname'] = $user->lastname;
        header('location:' . URLROOT . '/pages/home');
    }
    public function logout(){
        unset($_SESSION['user_id']); //unset tong na set na session kai naa mn to naka stack na info silbi delete to.
        unset($_SESSION['email']);
        header('location:' . URLROOT); // Back sa Landing page
    }
    public function admin(){ //Wla pai admin login
        $data = [
            'title' => 'Admin Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];
        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => ''
            ];
            //Validate email
            if(empty($data['email'])){
                $data['emailError'] = 'Please enter your email';
            }    
            if(($this->userModel->findUserByEmail($data['email']))===true){
                $data['emailError'] = 'Email does not exist';
            }
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter your password';
            }          
            else{
                $data['emailError'] = '';
            }     
            //check if all errors are empty
            if(empty($data['emailError']) && empty($data['passwordError'])){
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);   
                if($loggedInUser){
                    $this->createAdminSession($loggedInUser);
                } else{
                    $data['passwordError'] = 'Credentials are incorrect';
                    $this->view('users/admin', $data);
                }
            }
        } else{
            $data = [
                'email' => '', 
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];//empty ni if dli mo sulod.
        }
        $this->view('users/admin', $data); //search for the file
    }
    public function createAdminSession($user){ //basta mo login ang User kuhaon ni siya ang ID og Email
        $_SESSION['user_id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['lastname'] = $user->lastname;
        header('location:' . URLROOT . '/pages/adminhomepage');
    }
}
?>