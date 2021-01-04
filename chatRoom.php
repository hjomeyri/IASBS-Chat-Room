<?php
session_start();
require "model/user.php";
if(!isset($_SESSION['USER'])) {
    //header('Location: index.php');
}
else
{
    $u = unserialize($_SESSION['USER']);
}

require "config.php";
include $SharedViewPath."header.html";
include $ViewPath."chatRoom.html";
include $SharedViewPath."footer.html";

?>
