<?php
session_start();
unset($_REQUEST['USER']);
require "model/user.php";
include "loginRegister.html";
$Message = '';
if(isset($_POST['uiLogin']))
{
    $user = new user();
    $user->set_username($_POST['uiUsername']);
    $user->set_password($_POST['uiPassword']);

    if($user->Check_User_Pass())
    {
        $_SESSION['USER'] = serialize($Uuser);
        header('Location:chat_room.php');
    }

    $Message = 'Invalid username or password.';
}

?>
