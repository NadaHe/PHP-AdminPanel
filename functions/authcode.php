<?php

session_start();

include('../config/dbcon.php');
include('../functions/myfunctions.php');

if (isset($_POST['register_btn']))  // when the button is clicked
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    //check if email is already registered
    $check_email_query = "SELECT email FROM users WHERE email='$email' ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already registered";
        header('Location: ../register.php');
    } else {
        if ($password == $cpassword) {

            //insert user data into the data base
            $insert_query = "INSERT INTO users(name,email,phone, password) VALUES('$name','$email','$phone','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);

            if ($insert_query_run) {
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../login.php');
            } else {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../register.php');
            }
        } else {
            $_SESSION['message'] = "Password and Confirm Password does not match";
            header('Location: ../register.php');
        }
    }
} else if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $response = $_POST['g-recaptcha-response'];

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id'];
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'name' => $username,
            'email' => $useremail
        ];

        $_SESSION['role_as'] = $role_as;

        if ($role_as == 1)  //admin
        {
            redirect('../admin/index.php', "Welcome to dashboard");
        } else {
            redirect('../index.php', "Logged in Successfully");
        }
    } else if ($email == "" || $password == "") {
        redirect('../login.php', "please fill all the fields");
    } else {
        redirect('../login.php', "Email or Password is incorrect");
    }
} else if (isset($_POST['contact-btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $file = $_FILES["file"]['name'];


    // header("Location: contact-us.php");


    // $image = $_FILES['image']['name'];

    $path = "../uploads";

    $file_ext = pathinfo($file, PATHINFO_EXTENSION);
    $filename = time() . '.' . $file_ext;

    $contact_query = "INSERT into contact(name,email,phone,city,file)
     values('$name','$email','$phone','$city','$file')";

    $contact_query_run = mysqli_query($con, $contact_query);

    if ($contact_query_run) {
        move_uploaded_file($_FILES['file']['tmp_name'], $path . '/' . $filename);
        // move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
        redirect("contact-us.php", "Message added successfully");
    } else {
        redirect("contact-us.php", "Something went wrong");
    }
}
