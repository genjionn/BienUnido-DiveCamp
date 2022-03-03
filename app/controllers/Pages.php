<?php
class Pages extends Controller { //Mo extend ni siya sa libraries/Controller.php
    public function __construct(){
        //$this->userModel = $this->model('User');
    }
    public function index(){
        $this->view('pages/index', $data);
    }
    public function about(){
        $this->view('pages/about');
    }
    public function dashboard(){
        $this->view('pages/dashboard');
    }

}
?>