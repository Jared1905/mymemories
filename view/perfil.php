<?php
    require("../model/Usuario.php");
    session_start();
    if(isset($_SESSION["user"])){
        ?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>My Memories</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="../images/mymemories.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="../images/mymemories.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="../images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="../images/mymemories.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/material.css" />
    <link rel="stylesheet" href="mainm.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.10.3/themes/base/jquery.ui.all.css"/>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-1.7-development-only.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="jquery-ui-1.10.3/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="jquery-ui-1.10.3/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="jquery-ui-1.10.3/ui/jquery.ui.datepicker.js"></script>
        
    <style>
    
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body onload="noatras()">
  <script type="text/javascript">
            function noatras(){
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){
                    window.location.hash="no-back-button";
                    }
}
        </script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer">
      Mi Perfil
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        
      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
    <div class="row">
    <?php
        $usuario = Usuario::getById($_SESSION["user"]);
    ?>
   
            <div class="col-md-6">
                <img class="avatar" src='<?php echo "data:image/jpeg;base64,".$usuario->foto;?>' height="50" width="50"/>
            </div>
            <style>
                      .avatar {
                        /* cambia estos dos valores para definir el tamaño de tu círculo */
                        height: 100px;
                        width: 100px;
                        /* los siguientes valores son independientes del tamaño del círculo */
                        background-repeat: no-repeat;
                        background-position: 50%;
                        border-radius: 50%;
                        background-size: 100% auto;
                    }
            </style>
            <div class="col-md-6">
                <label><?php echo $usuario->nombre." ".$usuario->apePaterno;  ?></label>
            </div>
        </div>
    </span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="menuPrincipal.php"><img src="../images/love.png" width="30" height="30"/><b><?php echo " Mis recuerdos";?></b></a>
      <a class="mdl-navigation__link" href="perfil.php"><img src="../images/4_avatar-512.png" width="30" height="30"/><b><?php echo " Mi perfil";?></b></a>
      <a class="mdl-navigation__link" href="papeleta.php"><img src="../images/paps.png" width="30" height="30"/><b><?php echo " Papeleta";?></b></a>
      <a class="mdl-navigation__link" href="../acciones/SessionClose.php"><img src="../images/exit.png" width="30" height="30"/><b><?php echo " Salir";?></b></a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
    <style>
                        .demo-card-wide > <?php echo".mdl-card__title"; ?> {
                            color: #fff;
                            height: 300px;
                            background: <?php echo "url('data:image/png;base64,".$usuario->foto."')"; ?> center / cover;
                        }
                        </style>
                        <br>
                        <center>
                        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="<?php echo "mdl-card__title"; ?>">
                        </div>
                        <div class="mdl-card__supporting-text">
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                        
                        
                        </div>
                        <div class="mdl-card__menu">
                           <!--- <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                            <i class="material-icons">share</i>
                            </button> -->
                        </div>
                        </div>
                        <form method="post" enctype="multipart/form-data" action="../acciones/updateUsuario.php">
                            
                        <br><br><br>
                            <input type="hidden" name="id" value="<?php echo $usuario->id;?>">
                            <center>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" name="nombre" type="text" id="sample3" value="<?php echo $usuario->nombre; ?>">
                                <label class="mdl-textfield__label" for="sample3">Nombre</label>
                            </div>
                            </center>
                            <br>
                            <center>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" name="apePaterno" type="text" id="sample3" value="<?php echo $usuario->apePaterno; ?>">
                                <label class="mdl-textfield__label" for="sample3">Apellido Paterno</label>
                            </div>
                            </center>
                            <br>
                            <center>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" name="apeMaterno" type="text" id="sample3" value="<?php echo $usuario->apeMaterno; ?>">
                                <label class="mdl-textfield__label" for="sample3">Apellido Materno</label>
                            </div>
                            </center>
                            
                            <br>
                            <center>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" name="pass" type="password" id="sample3" value="<?php echo base64_decode($usuario->contrasenia); ?>">
                                <label class="mdl-textfield__label" for="sample3">Contraseña</label>
                            </div>
                            </center>
                            <br>
                            <center>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                             <label class="mdl-textfield__label"  >Foto</label>
                             <br>
                             <br>
                                <input class="form-control" name="foto" type="file" accept="image/png, image/jpeg">
                            </div>
                            <br>
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
                                <?php echo "Guardar"; ?>
                            </button>
                            <br>
                            
                        </form>
                        <br>
                        <form method="post" action="menuPrincipal.php">
                            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
                                <?php echo "Regresar"; ?>
                            </button>
                        </form>
                <?php
            
            
        ?>
    </div>
  </main>
</div>
     
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>

        <?php
    }else{
        header('Location: ../index.php');
    }
?>

