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
        $total = $this->roomModel->displayrooms(); //Display Rooms
        $_SESSION['getrooms'] = $total;
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
            'roomresultError' => '',
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
        unset($_SESSION['getrooms']);
        $total = $this->roomModel->displayrooms(); //Display Rooms
        $_SESSION['getrooms'] = $total; //Session add for displaying rooms
        $_SESSION['searchingrooms'] = [];
        if (isset($_POST['SearchRoom'])){//SEARCH ROOM
            $data = [
                'roomupdateError' => '',
                'roomsearch' => trim($_POST['roomsearch'])
            ];
            if(empty($data['roomsearch'])){
                $data = [
                    'roomresultError' => '',
                    'roomavailError' => '',
                    'roompriceError' => '',
                    'roomupdateError' => '',
                    'roomimgError' => '',
                    'roomnameError' => '',
                    'roomdescError' => '',
                    'roomlocationError' => ''  
                ];
                $data['roomupdateError'] = 'Search Field must not be empty'; 
            } else{
                $data = [          
                    'roomavailError' => '',
                    'roompriceError' => '',
                    'roomupdateError' => '',
                    'roomimgError' => '',
                    'roomnameError' => '',
                    'roomdescError' => '',
                    'roomlocationError' => '',
                    'roomresultError' => '',
                    'roomsearch' => trim($_POST['roomsearch'])
                ];
                unset($_SESSION['searchingrooms']);
                $TempSearch = $this->roomModel->readroom($data['roomsearch']);
                if($this->roomModel->readroom($data['roomsearch'])){
                    $_SESSION['searchingrooms'] = $TempSearch;
                    $data['roomresultError'] = '<button type="submit" name="searchreset">Reset</button>';
                    $data['roomupdateError'] = 'Search Result:';
                } else{
                    $data = [          
                        'roomavailError' => '',
                        'roompriceError' => '',
                        'roomupdateError' => '',
                        'roomimgError' => '',
                        'roomnameError' => '',
                        'roomdescError' => '',
                        'roomlocationError' => '',
                        'roomresultError' => ''
                    ];
                    $_SESSION['searchingrooms'] = [];
                    $data['roomupdateError'] = 'No such room exist';   
                }
            }    
        }
        if (isset($_POST['searchreset'])){//SEARCH Reset
            unset($_SESSION['searchingrooms']);  
            $_SESSION['searchingrooms'] = [];
        }

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
                    header('location:' . URLROOT . '/pages/admincreateroom');
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
                                header('location:' . URLROOT . '/pages/admincreateroom');
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
                header('location:' . URLROOT . '/pages/admincreateroom');
            } else{
                die('Something Went wrong');
            }
        }
        if (isset($_POST['MultiDelete'])){//MULTIPLE DELETE ROOM
            $data = [
                'roomupdateError' => '',
                'roomids' => isset($_POST['sel_del']) && is_array($_POST['sel_del']) ? $_POST['sel_del'] : [] 
            ];
            if(empty($data['roomids'])){
                header('location:' . URLROOT . '/pages/admincreateroom');
            } else{
                $rids = implode(',', $data['roomids']);
                if($this->roomModel->multipledeleteroom($rids)){
                    header('location:' . URLROOT . '/pages/admincreateroom');
                } else{
                    die('Something Went wrong');
                }
            } 
        }
        if(isset($_POST['ViewReserve'])){
            unset($_SESSION['viewReserveID']);
            $data = [
                'roomid' => trim($_POST['roomid']),
            ];
            $_SESSION['viewReserveID'] = $data['roomid'];
            header("Location: ". URLROOT ."/pages/viewreserves");
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
                    //Image Create to the destination folder
                    move_uploaded_file($rimageTmpName, $rimageDestination);
                    header('location:' . URLROOT . '/pages/admincreateroom');
                } else{
                    die('Something Went wrong');
                }
            }
        }
        $this->view('pages/admincreateroom', $data);
    }
    public function createreservation(){
        $data = [
            'roomid' => '',
            'roomsavail' => '',
            'checkin_date' => '',
            'checkout_date' => '',
            'number_of_adult' => '',
            'number_of_child' => '',
            'mobile_number' => '',
            'checkin_dateError' => '',
            'checkout_dateError' => '',
            'number_of_adultError' => '',
            'number_of_childError' => '',
            'mobile_numberError' => '',
            'roomavail' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'roomid' => $_SESSION['reserveID'],
                'checkin_date' => trim($_POST['checkin_date']),
                'checkout_date' => trim($_POST['checkout_date']),
                'number_of_adult' => trim($_POST['number_of_adult']),
                'number_of_child' => trim($_POST['number_of_child']),
                'mobile_number' => trim($_POST['mobile_number']),
                'checkin_dateError' => '',
                'checkout_dateError' => '',
                'number_of_adultError' => '',
                'number_of_childError' => '',
                'mobile_numberError' => '',
                'roomavail' => ''
            ];
            if(empty($data['checkin_date'])){
                $data['checkin_dateError'] = 'Please select check in date';
            }
            if(empty($data['checkout_date'])){
                $data['checkout_dateError'] = 'Please select check out date';
            }
            if(empty($data['number_of_adult'])){
                $data['number_of_adultError'] = 'Number of adults cannot be empty';
            }
            if(empty($data['number_of_child'])){
                $data['number_of_childError'] = 'Number of children cannot be empty, if none please select 0';
            }
            if(empty($data['mobile_number'])){
                $data['mobile_numberError'] = 'Please input your mobile number (in case for follow up reservation)';
            }
            if(empty($data['checkin_dateError']) && empty($data['checkout_dateError']) && empty($data['number_of_adultError']) && empty($data['mobile_numberError']) && empty($data['number_of_childError'])){
                if($this->roomModel->bookRoom($data)){
                    $TempSearch = $this->roomModel->bookRoomfindRoom($data['roomid']);
                    $deduct = $TempSearch[0]->roomsavailable - 1;
                    $data['roomavail'] = $deduct;
                    print_r($deduct);
                    if($this->roomModel->bookRoomDeductAvail($data)){
                        header("Location: " . URLROOT . "/pages/reservation");
                    }else{
                        die("Something Went Wrong!");
                    }
                }else{
                    die("Something went wrong, please try again!");
                }
            }else{
                $this->view('pages/createreservation', $data);
            }
        }
        $this->view('pages/createreservation', $data);
    }
    public function reservation(){
        $rooms = $this->roomModel->displayrooms();
        unset($_SESSION['reserveID']);  
        $data = [
            'roomid' => '',
            'rooms' => $rooms
        ];
        if(isset($_POST['ReserveRoom'])){
            $data = [
                'roomid' => trim($_POST['roomid']),
            ];
            $_SESSION['reserveID'] = $data['roomid'];
            header("Location: ". URLROOT ."/pages/createreservation");
        }
        $this->view('pages/userreservation', $data);
    }
    public function viewreserves(){
        $getviewID = $_SESSION['viewReserveID'];
        $fetchreserves = $this->roomModel->viewroom($getviewID);
        $data = [
            'viewreserves' => $fetchreserves
        ];
        $this->view('pages/viewreserves', $data);
    }
}
?>