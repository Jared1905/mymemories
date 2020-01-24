<?php
include("../model/Usuario.php");
if(count($_POST)>0)
{
    Recuerdo::delete($_POST["id"]);
}
header('Location: ../view/menuPrincipal.php');
?>
