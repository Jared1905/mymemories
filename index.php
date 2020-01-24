<!DOCTYPE html>
<html lang="es">
<head>
	<title>My memories</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/mymemories.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/indexmain.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
</head>
<!--===============================================================================================-->
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION["user"])){
		header('Location: view/menuPrincipal.php');
    }
?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/dc.jpg');">
			<div class="wrap-login100 p-t-20 p-b-30">
			<?php
				if(!isset($_POST['registro'])){
					if(isset($_POST["user"])){
						if($_POST["user"] != "0"){
							$mensaje = $_POST["nombre"]." ".$_POST["apePaterno"];
        					$_SESSION["user"] = $_POST["user"];
							?>
							<script>
							swal(
								'Bienvenido(a):',
								'<?php echo $mensaje; ?>',
								'success'
							).then(okay => {
								if (okay) {
								window.location.href='index.php';
								}
							});
							</script>
							<?php
						}else{
							?>
							<script>
									swal({
									title: "¡ERROR!",
									text: "Email y/o Contraseña incorrectos",
									type: "error",
									});              
									</script>
	
							<?php
						}
					}
			?>
				<form class="login100-form validate-form" method="post" action="acciones/Sesion.php">
					<div class="login100-form-avatar">
						<img src="images/mymemories.png" alt="AVATAR">
					</div>
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email requerido">
						<input class="input100" type="text" name="correo" placeholder="Email" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Contraseña requerida">
						<input class="input100" type="password" name="pass" placeholder="Contraseña"  autocomplete="off">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Iniciar Sesión
						</button>
					</div>

					
				</form>

			<form method="post" action="index.php">
				<div class="container-login100-form-btn p-t-10">
				<input type="hidden" name="registro" value="0"/>
						<button class="login100-form-btn">
							Registrarme
						</button>
					</div>
			</form>

					<div class="text-center w-full p-t-25 p-b-20">
						<a href="#" style="color:#FFFFFF;">
							¿Olvidó su contraseña?
						</a>
					</div>
			<?php
				}else{
					
			?>
			
					<form class="login100-form validate-form" enctype="multipart/form-data" method="post" action="acciones/addUsuario.php">
						<div class="login100-form-avatar">
							<img src="images/mymemories.png" alt="AVATAR">
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Nombre requerido">
							<input class="input100" type="text" name="nombre" placeholder="Nombre" autocomplete="off">
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Apellido paterno requerido">
							<input class="input100" type="text" name="apePaterno" placeholder="Apellido Paterno" autocomplete="off">
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Apellido materno requerido">
							<input class="input100" type="text" name="apeMaterno" placeholder="Apellido Materno" autocomplete="off">
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Email requerido">
							<input class="input100" type="text" name="correo" placeholder="Email" autocomplete="off">
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Contraseña requerida">
							<input class="input100" type="password" name="contrasenia" placeholder="Contraseña"  autocomplete="off">
						</div>

							<br>
							<center><h5 style="color:#FFFFFF;">Foto</h5></center>
							<input class="form-control" type="file" name="fotos" accept="image/png, image/jpeg">

						<div class="container-login100-form-btn p-t-10">
							<button class="login100-form-btn">
								Crear cuenta
							</button>
						</div>
				</form>
				<form method="post" action="index.php">
				<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Regresar
						</button>
					</div>
			</form>
			<?php
				}
			?>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	

</body>
</html>