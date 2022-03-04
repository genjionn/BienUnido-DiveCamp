<?php 
    //mo load sa model and view
    class Controller {
        public function model($model){
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

        public function view($view, $data = []) { //Load/require the views file
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            } else{
                die("No view exists");
            }
        }
    }
?>