<?php
session_start();
unset($_SESSION['USER']);
require "config.php";
require $ModelPath."user.php";
include $SharedViewPath."header.html";
include $ViewPath."logIn.html";

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

include $SharedViewPath."footer.html";

?>

