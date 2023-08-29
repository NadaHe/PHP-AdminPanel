<?php

include('../functions/myfunctions.php');

if(isset($_SESSION['auth']))
{
    if($_SESSION['role_as'] != 1)
    {
        redirect('../index.php',"you are not authorized to access this page");
        // $_SESSION['message'] = "you are not authorized to access this page";
        // header('Location: ../index.php');
    }
} 
else
{
    redirect('../login.php',"Login to continue");
}

