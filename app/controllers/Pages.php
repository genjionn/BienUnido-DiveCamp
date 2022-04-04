<?php
class Pages extends Controller { //Mo extend ni siya sa libraries/Controller.php
    public function __construct(){
        $this->roomModel = $this->model('Room');
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
        $data = [
            'roomnames' => 'RoomNames',
            'roomdescs' => 'RoomDescription',
            'roomlocations' => 'RoomLocation'
        ];
        $this->view('pages/adminhomepage', $data);
    }
    public function adminprofile(){
        $this->view('pages/adminprofile');
    }
    public function admincreateroom(){
        $data = [
            'roomnameError' => '',
            'roomdescError' => '',
            'roomlocationError' => '',
            'roomname' => '',
            'roomdesc' => '',
            'roomlocation' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); //Uncoding unwanted characters
            $data = [
                'roomnameError' => '',
                'roomdescError' => '',
                'roomlocationError' => '',
                'roomname' => trim($_POST['roomname']),
                'roomdesc' => trim($_POST['roomdesc']),
                'roomlocation' => trim($_POST['roomlocation']),
                'adminid' => $_SESSION['user_id']
            ];
            //Validate Room name 
            if(empty($data['roomname'])){
                $data['roomnameError'] = 'Please enter Room name';
            } else{
                //check if room name exist
                if(($this->roomModel->findRoombyRoomName($data['roomname']))===false){
                    $data['roomnameError'] = 'Room Name Already taken';
                }
            }
            //Validate Room description
            if(empty($data['roomdesc'])){
                $data['roomdescError'] = 'Please enter Room description';
            }
            //Validate Room location 
            if(empty($data['roomlocation'])){
                $data['roomlocationError'] = 'Please enter Room Location';
            }
            //Make sure errors are empty
            if(empty($data['roomnameError']) && empty($data['roomlocationError']) && empty($data['roomdescError'])){
                //Register user from model function kung wlai errors
                if($this->roomModel->createroom($data)){
                    header('location:' . URLROOT . '/pages/adminhomepage');
                } else{
                    die('Something Went wrong');
                }
            }
        }
        $this->view('pages/admincreateroom', $data);
    }
}
?>