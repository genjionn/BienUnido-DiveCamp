<?php

class Pages extends Controller { //Mo extend ni siya sa libraries/Controller.php
    public function __construct(){
        $this->roomModel = $this->model('Room');
        $this->pageModel = $this->model('Page');
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

        $data = [
            'id' => '',
            'firstname' => '',
            'lastname' => '',
            'email' => ''
        ];

        if(isset($_POST['updatepic'])){
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
                        $fileNameNew = "user".$currentid."_".uniqid().".".$fileActualExt;
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

        elseif(isset($_POST['updateuser'])){

            $data = [
                'id' => trim($_POST['id']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email'])
            ];

            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];

            if($this->pageModel->updateinfo($data)){
                $_SESSION['id'] = $id;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                $_SESSION['email'] = $email;
                header('location:' . URLROOT . '/pages/profile');    
            }else{
                echo '<script>alert("Somethig went wrong")</script>';
                die('Something Went wrong');
            }

        }

        $this->view('pages/userprofile');
    }
    public function adminhomepage(){
        $this->view('pages/adminhomepage');
    }
    public function adminprofile(){

        $data = [
            'id' => '',
            'firstname' => '',
            'lastname' => '',
            'email' => ''
        ];

        if(isset($_POST['updatepic'])){
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
                        $fileNameNew = "user".$currentid."_".uniqid().".".$fileActualExt;
                        $fileDestination = '../public/img/uploads/'.$fileNameNew;
                        $query = "UPDATE users SET picname = '$fileNameNew' WHERE id = '$currentid';";
                        $conn = mysqli_connect("localhost", "root", "", "divecamp");
                        $result = mysqli_query($conn, $query);
                        move_uploaded_file($fileTmpName, $fileDestination);
                        $_SESSION['picname'] = $fileNameNew;
                        header("Location: ". URLROOT ."/pages/adminprofile");
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

        elseif(isset($_POST['updateuser'])){

            $data = [
                'id' => trim($_POST['id']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'email' => trim($_POST['email'])
            ];

            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];

            if($this->pageModel->updateinfo($data)){
                $_SESSION['id'] = $id;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                $_SESSION['email'] = $email;
                header('location:' . URLROOT . '/pages/adminprofile');    
            }else{
                echo '<script>alert("Somethig went wrong")</script>';
                die('Something Went wrong');
            }

        }

        $this->view('pages/adminprofile');
    }

    public function admincreateroom(){
        $data = [

            'roomavailError' => '',
            'roompriceError' => '',
            'roomupdateError' => '',
            'roomimgError' => '',
            'roomnameError' => '',
            'roomdescError' => '',
            'roomlocationError' => '',
            'roomid' => '',
            'roomname' => '',
            'roomdesc' => '',
            'roomlocation' => '',
            'roomprice' => '',
            'roomimg' => '',
            'roomavail' => '',
            'UpdateRoomImage' => ''
        ];
        $total = $this->roomModel->displayrooms(); //Display Rooms
        $_SESSION['getrooms'] = $total; //Session add for displaying rooms
        if (isset($_POST['UpdateRoom'])){ //UPDATE ROOM
            $data = [
                'roomupdateError' => '',
                'roomavailError' => '',
                'roompriceError' => '',
                'roomimgError' => '',
                'roomnameError' => '',
                'roomdescError' => '',
                'roomlocationError' => '',
                'roomimgname' => trim($_POST['roomimgname']),
                'roomid' => trim($_POST['roomid']),
                'roomname' => trim($_POST['roomname']),
                'roomdesc' => trim($_POST['roomdesc']),
                'roomlocation' => trim($_POST['roomlocation']),
                'roomprice' => trim($_POST['roomprice']),
                'roomavail' => trim($_POST['roomavail']),
                'UpdateRoomImage' => $_FILES['UpdateRoomImage'],
                'UpdateroomNewFileName' => ''
            ];
            if(empty($data['UpdateRoomImage']['name'])){ //if image file empty 
                $data['UpdateroomNewFileName'] = $data['roomimgname'];
                if($this->roomModel->updateroom($data)){
                    header('location:' . URLROOT . '/pages/adminhomepage');
                } else{
                    die('Something Went wrong');
                }
            } else{ //if image file not empty
                //Image File Breakdown
                $updateimageName = $data['UpdateRoomImage']['name'];
                $updateimageTmpName = $data['UpdateRoomImage']['tmp_name'];
                $updateimageSize = $data['UpdateRoomImage']['size'];
                $updateimageError = $data['UpdateRoomImage']['error'];
                $updateimageType = $data['UpdateRoomImage']['type'];
                $updateimageExt = explode('.', $updateimageName);
                $updateimageActualExt = strtolower(end($updateimageExt));
                $updateallowed = array('jpg', 'jpeg', 'png', 'pdf');
                if(in_array($updateimageActualExt, $updateallowed)){
                    if($updateimageError === 0){
                        if($updateimageSize < 500000){
                            $updateimageNameNew = uniqid('',true).".".$updateimageActualExt;
                            $updateimageDestination = '../public/img/roomimg/'.$updateimageNameNew;
                            $data['UpdateroomNewFileName'] = $updateimageNameNew;
                            if($this->roomModel->updateroom($data)){
                                //Image Create to the destination folder
                                move_uploaded_file($updateimageTmpName, $updateimageDestination);
                                header('location:' . URLROOT . '/pages/adminhomepage');
                            } else{
                                $data['roomupdateError'] = 'Something Went Wrong';
                            }
                        }else{
                            $data['roomupdateError'] = 'File too Large';
                        }
                    } else{
                        $data['roomupdateError'] = 'Error Uploading the File';
                    }
                } else{
                    $data['roomupdateError'] = 'File type Invalid';
                }
            }   
        }
        if (isset($_POST['DeleteRoom'])){//DELETE ROOM
            $data = [
                'roomid' => trim($_POST['roomid'])
            ];
            if($this->roomModel->deleteroom($data['roomid'])){
                header('location:' . URLROOT . '/pages/adminhomepage');
            } else{
                die('Something Went wrong');
            }
        }
        if(isset($_POST['AddRoom'])) { //ADD ROOM
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); //Uncoding unwanted characters
            $data = [
                'roomavailError' => '',
                'roomupdateError' => '',
                'roompriceError' => '',
                'roomimgError' => '',
                'roomnameError' => '',
                'roomdescError' => '',
                'roomlocationError' => '',
                'roomname' => trim($_POST['roomname']),
                'roomdesc' => trim($_POST['roomdesc']),
                'roomlocation' => trim($_POST['roomlocation']),
                'roomprice' => trim($_POST['roomprice']),
                'adminid' => $_SESSION['user_id'],
                'roomimage' => $_FILES['roomimage'],
                'roomavail' => trim($_POST['roomavail']),
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
                        $data['roomimgError'] = 'File too Large';
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
            } else{
                //check if room name exist
                if($this->roomModel->findRoombyRoomName($data['roomname'])){
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
            //Validate Room Price
            if(empty($data['roomprice'])){
                $data['roompriceError'] = 'Please enter Room Price';
            }
            //Validate Room Availability
            if(empty($data['roomavail'])){
                $data['roomavailError'] = 'Please enter No. of Available Rooms';
            }
            //Make sure errors are empty
            if(empty($data['roomimgError']) && empty($data['roomnameError']) && empty($data['roomlocationError']) && empty($data['roomdescError']) && empty($data['roompriceError']) && empty($data['roomavailError'])){
                $rimageNameNew = uniqid('',true).".".$rimageActualExt;
                $rimageDestination = '../public/img/roomimg/'.$rimageNameNew;
                $data['roomNewFileName'] = $rimageNameNew;
                //Register room from model function kung wlai errors
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