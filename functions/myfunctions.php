<?php
// session_start();
include('../config/dbcon.php');

function getAll($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getAllUsers($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE role_as = '0'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getAllAdmins($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE role_as = '1'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getByID($table,$id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id = '$id' ";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit();
}

function getAllOrders()
{
    global $con;
    $query = "SELECT * FROM orders WHERE status = '0'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}

function getOrderHistory()
{
    global $con;
    $query = "SELECT * FROM orders WHERE status != '0'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}

function checkTrackingNoValid($trackingNo){
    global $con;
    $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo' ";
    return  mysqli_query($con, $query);
}
