<?php
include("../model/Usuario.php");
if(count($_POST)>0)
{

	$usuario = new Usuario();
	if (isset($_POST['nombre'])) 
	{
		$usuario->nombre = $_POST["nombre"];
	}
	if (isset($_POST['apePaterno'])) 
	{
		$usuario->apePaterno = $_POST["apePaterno"];
	}
	if (isset($_POST['apeMaterno'])) 
	{
		$usuario->apeMaterno = $_POST["apeMaterno"];
	}
	if (isset($_POST['correo'])) 
	{
		$usuario->correo = $_POST["correo"];
	}
	if (isset($_POST['contrasenia'])) 
	{
		$usuario->contrasenia = base64_encode($_POST["contrasenia"]);
    }
    
    if (is_uploaded_file($_FILES["fotos"]["tmp_name"]))
    {
        $data=file_get_contents($_FILES["fotos"]["tmp_name"]);
        $usuario->foto = base64_encode($data);
    }
    
        

	$usuario->add();
}
header('Location: ../index.php');
?>
