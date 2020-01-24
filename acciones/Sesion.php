<?php
include("../model/Usuario.php");
$usuario = null;
if(count($_POST)>0)
{

    $usuario = Usuario::session($_POST["correo"], base64_encode($_POST["pass"]));
    if($usuario != null)
    {
        $usuario->id = $usuario->id;
       // session_start();
        //$_SESSION["user"] = $usuario->id;
        //header('Location: ../view/menuPrincipal.php');
    }
    else
    {
        $usuario->id = "0";
        //header('Location: ../index.php');
    }
	
}

?>
<form id="myForm"  method="post" action="../index.php">
    <input type="hidden" name="user" value="<?php echo $usuario->id; ?>">
    <input type="hidden" name="nombre" value="<?php echo $usuario->nombre; ?>">
    <input type="hidden" name="apePaterno" value="<?php echo $usuario->apePaterno; ?>">
</form>

<script type="text/javascript">
	document.getElementById('myForm').submit();
</script>
