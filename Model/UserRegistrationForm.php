<?php
session_start();
include "../Controller/db_conn.php";

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $re_password = validate($_POST['re_password']);

    $user_data = 'email='. $email. '&firstname'. $firstname;

    if(empty($firstname)){
        header("Location: View/RegistrationPage.php?error2=Firstname is required&$user_data");
        exit();
    }else if(empty($lastname)){
        header("Location: View/RegistrationPage.php?error2=Lastname is required&$user_data");
        exit();
    }else if(empty($email)){
        header("Location: View/RegistrationPage.php?error2=Email is required&$user_data");
        exit();
    }else if(empty($password)){
        header("Location: View/RegistrationPage.php ?error2=Password is required&$user_data");
        exit();

    }else if(empty($re_password)){
        header("Location: View/RegistrationPage.php ?error2=Re Password is required&$user_data");
        exit();

    }else if($password !== $re_password){
        header("Location: View/RegistrationPage.php?error2=The confirmation password  does not match&$user_data");
	    exit();
	}
    else{
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            header("Location: View/RegistrationPage.php?error2=The email is taken, try another&$user_data");
            exit();
        }else{
            $sql2 = "INSERT INTO users(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2){
                header("Location: View/RegistrationPage.php?success2=Your account has been created successfully");
                exit();
            }else{
                header("Location: View/Registration.php?error2=Unknown error occured&$user_data");
                exit();
            }
        }
    }

}else{
    header("Location: View/Registration.php");
    exit();
}