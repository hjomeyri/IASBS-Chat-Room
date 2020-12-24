<?php
session_start();
unset($_SESSION['USER']);
require "config.php";
require "model/user.php";
// include $ShareFolderPath."header.html";

$Message = '';
if(isset($_POST['uiLogin']))
{
    $u = new user();
    $u->setUsername($_POST['uiUsername']);
    $u->setPassword($_POST['uiPassword']);

    if($u->checkUserPass())
    {
        $_SESSION['USER'] = serialize($u);
        header('Location: chat.php');
    }

    $Message = 'Invalid username or password.';
}


include $ViewPath."signin.html";

// include $ShareFolderPath."footer.html";

?>