<?php

$nombre = $_SESSION['user_apenom'];
$cedula = $_SESSION['user_cedula'];
$rol = $_SESSION['user_rol'];

?>

<div class="container-fluid">

<div class="row">

<div class="col-md-4">

<div class="card shadow border-0">

<div class="card-body text-center">

<img

src="uploads/fotos/<?php echo $_SESSION['user_foto']; ?>"

class="rounded-circle shadow"

width="180"

height="180"

style="object-fit:cover;border:4px solid #16B5C4;"

>

<h3

class="mt-3"

style="color:#052C73;font-weight:700;">

<?php echo $nombre; ?>

</h3>

<p

style="color:#16B5C4;font-weight:600;">

<?php echo $rol; ?>

</p>

<hr>

<p>

<b>Cédula:</b>

<?php echo $cedula; ?>

</p>

<p>

<b>Rol:</b>

<?php echo $rol; ?>

</p>

<p>

<b>Sistema:</b>

Académica

</p>

</div>

</div>

</div>



<div class="col-md-8">

<div class="card shadow border-0">

<div

class="card-header text-white"

style="background:#052C73;">

<h4>

Información del usuario

</h4>

</div>

<div class="card-body">

<div class="row">

<div class="col-md-6">

<label>

Nombre

</label>

<input

type="text"

class="form-control"

value="<?php echo $nombre; ?>"

readonly>

</div>

<div class="col-md-6">

<label>

Cédula

</label>

<input

type="text"

class="form-control"

value="<?php echo $cedula; ?>"

readonly>

</div>

</div>



<br>



<div class="row">

<div class="col-md-6">

<label>

Rol

</label>

<input

type="text"

class="form-control"

value="<?php echo $rol; ?>"

readonly>

</div>



<div class="col-md-6">

<label>

Estado

</label>

<input

type="text"

class="form-control"

value="Activo"

readonly>

</div>

</div>

<br>

<button

class="btn text-white"

style="background:#052C73;">

Editar Perfil

</button>

</div>

</div>

</div>

</div>

</div>