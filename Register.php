<?php
require "config.php";
require "model/user.php";
include "loginRegister.html";


$Message = '';
$Username = "";
$Password="";
$Phone_Number = "";


if(isset($_POST['Register']))
{
    $Username = $_POST['UserName'];
    $Password = $_POST['Password'];
    $Phone_Number = $_POST['PhoneNumber'];

    $Validation_Message = validation();
    if($Validation_Message == "")
    {
        $user = new user();
        $user->set_username($_POST['UserName']);
        $user->set_password($_POST['Password']);
        $user->set_Phone_Number($_POST['PhoneNumber']);
        if($user->Save())
        {
            $Message = 'You have successfully Registed.';
            header('Location: Message.php');
        }
        else
        {
            $Message =  'The username already exists. Please use a different.';
        }
        else
        {
            $Message = $Validation_Message;
        }
    }
}

function validation()
{
    $Message = "";
    if($_POST["Username"]=="")
    {
        $Message = 'Enter Your name.'."<br/>";
    }
    if($_POST["Password"] == "")
    {
        $Message = 'Enter your family.'."<br/>";
    }
    if($_POST["Conf_Pass"] == "")
    {
        $Message = 'Enter Confirm Password';
    }
    if($_POST["Password"] != $_POST["Conf_Pass"])
    {
        $Message .= 'Password and confirmation password not match.'."<br/>";
    }

    return $Message ;
}
?>
