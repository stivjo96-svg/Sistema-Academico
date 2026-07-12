<?php

UserData::verificaSession();

date_default_timezone_set("America/Bogota");

if(session_status()==PHP_SESSION_NONE){
session_start();
}

$roles = "";

if(!empty($_SESSION['roles'])){
    $roles = implode(", ",$_SESSION['roles']);
}else{
    $roles = "Sin roles asignados";
}

$rolactual = $_SESSION['user_rol'];

$usuario = $_SESSION['user_apenom'];
$rol = $_SESSION['user_rol'];

?>

<div class="container-fluid">

<div class="row mb-4">

<div class="col-md-12">

<h1 class="display-5 fw-bold"
style="color:#052C73;">

Bienvenido,

<?php echo $usuario; ?>

</h1>

<h4 style="color:#16B5C4;">

Sistema Académico Escolar

</h4>

<p class="mt-3">

<b>Rol actual:</b>

<?php echo $rol; ?>

</p>

<hr>

</div>

</div>



<div class="row">

<div class="col-md-3">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="bi bi-mortarboard-fill fs-1"
style="color:#052C73;"></i>

<h2 class="mt-2">

170

</h2>

<p>

Estudiantes

</p>

</div>

</div>

</div>



<div class="col-md-3">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="bi bi-person-workspace fs-1"
style="color:#16B5C4;"></i>

<h2 class="mt-2">

20

</h2>

<p>

Docentes

</p>

</div>

</div>

</div>



<div class="col-md-3">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="bi bi-book-fill fs-1"
style="color:#D4A017;"></i>

<h2 class="mt-2">

36

</h2>

<p>

Asignaturas

</p>

</div>

</div>

</div>



<div class="col-md-3">

<div class="card shadow border-0">

<div class="card-body text-center">

<i class="bi bi-journal-check fs-1"
style="color:#052C73;"></i>

<h2 class="mt-2">

120

</h2>

<p>

Matrículas

</p>

</div>

</div>

</div>

</div>



<div class="row mt-4">

<div class="col-md-8">

<div class="card shadow">

<div class="card-header text-white"

style="background:#052C73;">

Actividad reciente

</div>

<div class="card-body">

<ul>

<li>Nueva matrícula registrada</li>

<li>Docente actualizado</li>

<li>Asignatura creada</li>

<li>Generación de reportes habilitada</li>

</ul>

</div>

</div>

</div>


<div class="col-md-4">

    <div class="card shadow">

        <div class="card-header text-white"
            style="background:#052C73;">

            Información del usuario

        </div>

        <div class="card-body text-center">

            <img src="uploads/fotos/<?php echo $_SESSION['user_foto']; ?>"
                class="rounded-circle shadow"
                width="120"
                height="120"
                style="object-fit:cover;border:3px solid #16B5C4;">

            <h5 class="mt-3">
                <?php echo $_SESSION['user_apenom']; ?>
            </h5>

            <p class="text-muted">
                <?php echo $_SESSION['user_rol']; ?>
            </p>

            <hr>

            <p>
                <b>Roles asignados:</b><br>
                <?php echo $roles; ?>
            </p>

        </div>

    </div>

</div>

<div class="row mt-4">

<div class="col-md-12">

<div class="card shadow">

<div class="card-header text-white"

style="background:#052C73;">

Accesos rápidos

</div>

<div class="card-body">

<button class="btn"

style="background:#052C73;color:white;">

Estudiantes

</button>

<button class="btn"

style="background:#16B5C4;color:white;">

Docentes

</button>

<button class="btn"

style="background:#D4A017;color:white;">

Asignaturas

</button>

<button class="btn"

style="background:#052C73;color:white;">

Matrículas

</button>

<button class="btn btn-secondary">

Reportes

</button>

</div>

</div>

</div>

</div>

</div>