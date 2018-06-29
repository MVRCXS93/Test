<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/bootstrap4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<? echo base_url();?>assets/bootstrap4/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/estilos/estilos.css">
    <style type="text/css">
    .container{
        padding:30px;
    }
</style>
</head>
<body class="d-flex flex-row justify-content-center my-flex-container">
    <div class="align-self-md-center container">
        <form action="<?php echo site_url('user/editarData');?>" method="POST" enctype="multipart/form-data">
            <img src= " <?php isset($Foto)? site_url($Foto): '' ?>" class="mx-auto d-block" alt="Imagen de perfil" >
            <div class="input-group input-group-sm mb-3">
                <input type="file" class="form-control" name="foto" accept="image/*" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                </div>
                <input type="text" class="form-control" name="nombre" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Nombre)?$Nombre:'' ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Apellidos</span>
                </div>
                <input type="text" class="form-control" name="apellidos" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Apellidos)?$Apellidos:'' ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                </div>
                <input type="text" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Mail)?$Mail:'' ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Calle</span>
                </div>
                <input type="text" class="form-control" name="calle" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Calle)?$Calle:'' ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Portal</span>
                </div>
                <input type="text" class="form-control" name="portal" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Portal)?$Portal:'' ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Piso</span>
                </div>
                <input type="text" class="form-control" name="piso" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Piso)?$Piso:'' ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Letra</span>
                </div>
                <input type="text" class="form-control" name="letra" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Letra)?$Letra:''?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Ciudad</span>
                </div>
                <input type="text" class="form-control" name="ciudad" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Ciudad)?$Ciudad:'' ?>">
            </div>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-append">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Provincia</span>
                </div>
                <input type="text" class="form-control" name="provincia" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= isset($Provincia)?$Provincia:'' ?>">
            </div>
            <div class="from-group w--100">
               <input class="btn btn-primary" type="submit" value="Login"/>
           </div>
       </form>
   </div>
</body>
</html>