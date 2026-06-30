<div class="row align-items-center contenido-login">

<style>

.btn-success{
    background:#052C73 !important;
    border-color:#052C73 !important;
}

.btn-success:hover{
    background:#031D52 !important;
    border-color:#031D52 !important;
}

.logo-academica{

    width:500px;

    max-width:100%;

}

.contenido-login{

    max-width:1400px;

    margin:auto;

    padding-top:50px;

}

.login-card{

    width:550px;

    min-width:550px;

    margin-left:60px;

}

.login-card .card-header{

    border-top:4px solid #16B5C4;

}

.text-eslogan{

    color:#16B5C4;

    font-size:22px;

    font-weight:500;

}

</style>



<!-- LOGO -->

<div class="col-lg-7 text-center">

<img

src="uploads/img/logo_academica.png"

class="img-fluid logo-academica">



<h1

class="mt-4 fw-bold"

style="color:#052C73;">

Académica

</h1>



<h4 class="text-secondary">

Sistema Académico Escolar

</h4>



<p class="text-eslogan">

Organiza. Enseña. Aprende. Crece.

</p>

</div>



<!-- LOGIN -->

<div class="col-lg-5">

<div class="card login-card shadow-lg">

<div class="card-header bg-white">

<h2

class="fw-bold mb-0"

style="font-size:3rem;color:#052C73;">

Académica

</h2>

</div>

<div class="card-body">

<?php

if(

isset($_SESSION['user_error'])

&&

$_SESSION['user_error']!=null

){

?>

<div class="alert alert-danger">

<i class="bi bi-x-circle-fill me-2"></i>

<strong>Error:</strong>

<?php

echo $_SESSION['user_error'];

?>

</div>

<?php

$_SESSION['user_error']=null;

}

?>



<p

class="login-box-msg"

style="font-size:20px;">

Ingrese sus credenciales académicas

</p>



<form

action="./?action=processlogin"

method="post">



<div class="input-group mb-3">

<div class="form-floating">

<input

type="text"

name="txtCedula"

class="form-control"

style="height:55px;">

<label>

Usuario

</label>

</div>

<div class="input-group-text">

<span class="bi bi-person-vcard-fill">

</span>

</div>

</div>



<div class="input-group mb-3">

<div class="form-floating">

<input

type="password"

name="txtPassword"

class="form-control"

style="height:55px;">

<label>

Contraseña

</label>

</div>

<div class="input-group-text">

<span class="bi bi-lock-fill">

</span>

</div>

</div>



<div class="row align-items-center">

<div class="col-md-7">

<div class="form-check">

<input

class="form-check-input"

type="checkbox"

id="recordar">



<label

class="form-check-label"

for="recordar">

Mantener sesión iniciada

</label>

</div>

</div>



<div class="col-md-5">

<div class="d-grid">

<button

type="submit"

name="btn-login"

class="btn btn-success btn-lg">

Ingresar

</button>

</div>

</div>

</div>



</form>



<div class="mt-4">

<p class="mb-2">

<a href="#">

¿Olvidó su contraseña?

</a>

</p>



<p>

<a href="#">

Solicitar acceso institucional

</a>

</p>

</div>

</div>

</div>

</div>

</div>