<?php
UserData::verificaSession();
?>

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="text-warning fw-bold">
Asignaturas
</h2>

<button class="btn btn-warning text-dark">

<i class="bi bi-plus-circle"></i>

Nueva asignatura

</button>

</div>


<div class="card shadow-sm">

<div class="card-header bg-warning">

Listado de asignaturas

</div>

<div class="card-body">

<table class="table table-hover table-bordered">

<thead class="table-light">

<tr>

<th>Código</th>

<th>Asignatura</th>

<th>Horas</th>

<th>Docente</th>

<th>Acciones</th>

</tr>

</thead>

<tbody>

<tr>

<td>MAT001</td>

<td>Matemáticas</td>

<td>5</td>

<td>Pedro Sánchez</td>

<td>

<button class="btn btn-warning btn-sm">

Editar

</button>

<button class="btn btn-danger btn-sm">

Eliminar

</button>

</td>

</tr>

<tr>

<td>LEN002</td>

<td>Lengua y Literatura</td>

<td>4</td>

<td>Ana Martínez</td>

<td>

<button class="btn btn-warning btn-sm">

Editar

</button>

<button class="btn btn-danger btn-sm">

Eliminar

</button>

</td>

</tr>

<tr>

<td>CN003</td>

<td>Ciencias Naturales</td>

<td>4</td>

<td>Carlos Herrera</td>

<td>

<button class="btn btn-warning btn-sm">

Editar

</button>

<button class="btn btn-danger btn-sm">

Eliminar

</button>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>