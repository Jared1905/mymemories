<?php
include("../model/Usuario.php");
if(count($_POST)>0)
{

    $dato = Recuerdo::getById($_POST["id"]);
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
    
    $recuerdo->id = $dato->id;

    if (is_uploaded_file($_FILES["foto"]["tmp_name"]))
    {
        $data=file_get_contents($_FILES["foto"]["tmp_name"]);
        $recuerdo->foto = base64_encode($data);
    }
    else
    {
        $recuerdo->foto = $dato->foto;
    }
    
        

	$recuerdo->update();
}
header('Location: ../view/menuPrincipal.php');
?>
