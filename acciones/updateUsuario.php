<?php
include("../model/Usuario.php");
if(count($_POST)>0)
{

    $dato = Usuario::getById($_POST["id"]);
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

    if (isset($_POST['pass'])) 
	{
		$usuario->contrasenia = base64_encode($_POST["pass"]);
    }
    
    
    $usuario->id = $dato->id;

    if (is_uploaded_file($_FILES["foto"]["tmp_name"]))
    {
        $data=file_get_contents($_FILES["foto"]["tmp_name"]);
        $usuario->foto = base64_encode($data);
    }
    else
    {
        $usuario->foto = $dato->foto;
    }
    
        

	$usuario->update();
}
header('Location: ../view/menuPrincipal.php');
?>
