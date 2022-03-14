<?php
class Pages extends Controller { //Mo extend ni siya sa libraries/Controller.php
    public function __construct(){
        //$this->userModel = $this->model('User');
    }
    public function index(){
        $this->view('pages/index');
    }
    public function about(){
        $this->view('pages/userabout');
    }
    public function home(){
        $this->view('pages/userhomepage');
    }
    public function dashboard(){
        $this->view('pages/dashboard');
    }
    public function reservation(){
        $this->view('pages/userreservation');
    }
    public function contact(){
        $this->view('pages/usercontactus');
    }
    public function profile(){
        $this->view('pages/userprofile');
    }
    public function adminhomepage(){
        $this->view('pages/adminhomepage');
    }
    public function adminprofile(){
        $this->view('pages/adminprofile');
    }




}
?>