<?php
include("../model/Usuario.php");
if(count($_POST)>0)
{
    Recuerdo::restore($_POST["id"]);
}
header('Location: ../view/papeleta.php');
?>
