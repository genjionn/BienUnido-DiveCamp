<?php 
//Core app class ( mao ni First na php file ma read once mo search of http://localhost/DiveCamp_Project/)
    class Core {
        protected $currentController = 'Pages'; //if no other controller this will be loaded.
        protected $currentMethod = 'index'; //method that fetch the url
        protected $params = []; //Link url to connect
        public function __construct(){
            //print_r($this->getUrl()); //Test if Core.php is working
            $url = $this->getUrl();
            if($url != NULL){ //if null dli siya mo agi ari
                //Mangita sa controllers folder sa first value, ucwords mo capitalize sa first letter
                if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) { //look for the first value in the controllers for example: http://localhost/DiveCamp_Project/Hotels sa Array[0] kai Hotels mangita og Hotel .php sa controllers folder.
                    //Will set a new controller
                    $this->currentController = ucwords($url[0]);
                    unset($url[0]);
                }
            } 
            //Require the Controller
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;
            //Check for the second word of the URL
            if(isset($url[1])){
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }
            //Get parameters
            $this->params = $url ? array_values($url) : []; //if empty it will stay empty
            //Call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }
        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');  // if the url kai last niya lkai '/' 
                $url = filter_var($url,FILTER_SANITIZE_URL); // mo filter og variables as string/number
                $url = explode('/', $url); //gi butang sa array ang every '/' word sa URL
                return $url;
            }
        }
    }
?>