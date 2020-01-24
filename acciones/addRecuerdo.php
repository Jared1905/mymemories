<?php
include("../model/Usuario.php");
session_start();
if(count($_POST)>0)
{

	$recuerdo = new Recuerdo();
	if (isset($_POST['nombre'])) 
	{
		$recuerdo->nombre = $_POST["nombre"];
	}
	if (isset($_POST['descripcion'])) 
	{
		$recuerdo->descripcion = $_POST["descripcion"];
	}
	if (isset($_POST['fecha'])) 
	{
		$recuerdo->fecha = date("Y-m-d",strtotime($_POST["fecha"]));
    }
    
    $recuerdo->idUsuario = $_SESSION["user"];

    if (is_uploaded_file($_FILES["foto"]["tmp_name"]))
    {
        $data=file_get_contents($_FILES["foto"]["tmp_name"]);
        $recuerdo->foto = base64_encode($data);
    }
    
        

	$recuerdo->add();
}
header('Location: ../view/menuPrincipal.php');
?>
