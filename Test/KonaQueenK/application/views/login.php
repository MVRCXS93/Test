<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/bootstrap4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="<? echo base_url();?>assets/bootstrap4/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/estilos/estilos.css">
</head>
<body class="d-flex flex-row justify-content-center my-flex-container">
  <div class="align-self-md-center container">
    <div class="errorMessage"><?php echo $this->session->flashdata('message');?></div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Registro</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
        <div class="row">
          <form class="form w-100" action="<?php echo site_url('login/iniciarSesion');?>" method="POST">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-append">
                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
              </div>
              <input type="text" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-append">
                <span class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
              </div>
              <input type="password" class="form-control" name="password" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="from-group w--100">
              <input class="btn btn-primary" type="submit" value="Login">
            </div>
          </form>
        </div>
      </div>
      <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
        <div class="row">
          <form class="form w-100" action="<?php echo site_url('user/registrarUsuario');?>" method="POST">
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-append">
                <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
              </div>
              <input type="text" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-append">
                <span class="input-group-text" id="inputGroup-sizing-sm">Contraseña</span>
              </div>
              <input type="password" class="form-control" name="password" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-append">
                <span class="input-group-text" id="inputGroup-sizing-sm">Repita la contraseña</span>
              </div>
              <input type="password" class="form-control" name="passwordRepeat" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="from-group w--100">
              <input class="btn btn-primary" type="submit" value="Login">
            </div>
          </form>  
        </div>
      </div>
    </div>
  </div>
</body>
</html>