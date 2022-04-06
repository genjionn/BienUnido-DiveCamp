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
        if(isset($_POST['submit'])){
            $file = $_FILES['file'];

            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');
            $currentid = $_SESSION['user_id'];

            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 5000000){
                        $fileNameNew = "user".$currentid.".".$fileActualExt;
                        $fileDestination = '../public/img/uploads/'.$fileNameNew;
                        $query = "UPDATE users SET picname = '$fileNameNew' WHERE id = '$currentid';";
                        $conn = mysqli_connect("localhost", "root", "", "divecamp");
                        $result = mysqli_query($conn, $query);
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $_SESSION['picname'] = $fileNameNew;
                        header("Location: ". URLROOT ."/pages/profile");
                    }else{
                    echo '<script>alert("Your image file size is too big.")</script>';
                    }
                }else{
                    echo '<script>alert("There was an error uploading your image.")</script>';
                }
            }else{
                echo '<script>alert("You can only upload .png or .jpg images.")</script>';
            }
        }
        $this->view('pages/userprofile');
    }
    public function adminhomepage(){
        $this->view('pages/adminhomepage');
    }
    public function adminprofile(){
        if(isset($_POST['submit'])){
            $file = $_FILES['file'];

            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');
            $currentid = $_SESSION['user_id'];

            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 5000000){
                        $fileNameNew = "user".$currentid.".".$fileActualExt;
                        $fileDestination = '../public/img/uploads/'.$fileNameNew;
                        $query = "UPDATE users SET picname = '$fileNameNew' WHERE id = '$currentid';";
                        $conn = mysqli_connect("localhost", "root", "", "divecamp");
                        $result = mysqli_query($conn, $query);
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $_SESSION['picname'] = $fileNameNew;
                        header("Location: ". URLROOT ."/pages/profile");
                    }else{
                    echo '<script>alert("Your image file size is too big.")</script>';
                    }
                }else{
                    echo '<script>alert("There was an error uploading your image.")</script>';
                }
            }else{
                echo '<script>alert("You can only upload .png or .jpg images.")</script>';
            }
        }
        $this->view('pages/adminprofile');
    }
    public function admincreateroom(){
        $data = [
            'roomimgError' => '',
            'roomnameError' => '',
            'roomdescError' => '',
            'roomlocationError' => '',
            'roomid' => '',
            'roomname' => '',
            'roomdesc' => '',
            'roomlocation' => '',
            'roomimg' => ''
        ];
        $total = $this->roomModel->displayrooms(); //Display Rooms
        $_SESSION['getrooms'] = $total; //Session add for displaying rooms
        if (isset($_POST['UpdateRoom'])){ //UPDATE ROOM
            $data = [
                'roomupdateError' => '',
                'roomid' => trim($_POST['roomid']),
                'roomname' => trim($_POST['roomname']),
                'roomdesc' => trim($_POST['roomdesc']),
                'roomlocation' => trim($_POST['roomlocation'])
            ];
            if($this->roomModel->updateroom($data)){
                header('location:' . URLROOT . '/pages/adminhomepage');
            } else{
                die('Something Went wrong');
            }
        }
        elseif (isset($_POST['DeleteRoom'])){//DELETE ROOM
            $data = [
                'roomid' => trim($_POST['roomid'])
            ];
            if($this->roomModel->deleteroom($data['roomid'])){
                header('location:' . URLROOT . '/pages/adminhomepage');
            } else{
                die('Something Went wrong');
            }
        }
        elseif(isset($_POST['AddRoom'])) { //ADD ROOM
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); //Uncoding unwanted characters
            $data = [
                'roomimgError' => '',
                'roomnameError' => '',
                'roomdescError' => '',
                'roomlocationError' => '',
                'roomname' => trim($_POST['roomname']),
                'roomdesc' => trim($_POST['roomdesc']),
                'roomlocation' => trim($_POST['roomlocation']),
                'adminid' => $_SESSION['user_id'],
                'roomimage' => $_FILES['roomimage'],
                'roomNewFileName' => ''
            ];
            //Image File Breakdown
            $rimageName = $data['roomimage']['name'];
            $rimageTmpName = $data['roomimage']['tmp_name'];
            $rimageSize = $data['roomimage']['size'];
            $rimageError = $data['roomimage']['error'];
            $rimageType = $data['roomimage']['type'];
            $rimageExt = explode('.', $rimageName);
            $rimageActualExt = strtolower(end($rimageExt));
            $allowed = array('jpg', 'jpeg', 'png', 'pdf');
            //Validate Room image
            if(empty($data['roomimage']['name'])){
                $data['roomimgError'] = 'Please Upload room image';
            } elseif(in_array($rimageActualExt, $allowed)){
                if($rimageError === 0){
                    if($rimageSize > 500000){
                        $data['roomimgError'] = 'File to Large';
                    }
                } else{
                    $data['roomimgError'] = 'Error Uploading the File';
                }
            } else{
                $data['roomimgError'] = 'File type Invalid';
            }
            //Validate Room name 
            if(empty($data['roomname'])){
                $data['roomnameError'] = 'Please enter Room name';
            } elseif($this->roomModel->findRoombyRoomName($data['roomname'])){
                //check if room name exist
                $data['roomnameError'] = 'Room Name Already taken';
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
            if(empty($data['roomimgError']) && empty($data['roomnameError']) && empty($data['roomlocationError']) && empty($data['roomdescError'])){
                $rimageNameNew = uniqid('',true).".".$rimageActualExt;
                $rimageDestination = '../public/img/roomimg/'.$rimageNameNew;
                $data['roomNewFileName'] = $rimageNameNew;
                //Register room from model function kung wlai errors
                if($this->roomModel->createroom($data)){
                    //Image Create to the destination folder
                    move_uploaded_file($rimageTmpName, $rimageDestination);
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