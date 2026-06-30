<?php
UserData::verificaSession();
?>

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="text-danger fw-bold">

Matrículas

</h2>

<button class="btn btn-danger">

<i class="bi bi-plus-circle"></i>

Nueva matrícula

</button>

</div>


<div class="card shadow-sm">

<div class="card-header bg-danger text-white">

Listado de matrículas

</div>

<div class="card-body">

<table class="table table-hover table-bordered">

<thead class="table-light">

<tr>

<th>ID</th>

<th>Estudiante</th>

<th>Curso</th>

<th>Periodo</th>

<th>Estado</th>

<th>Acciones</th>

</tr>

</thead>

<tbody>

<tr>

<td>001</td>

<td>Juan Pérez</td>

<td>Décimo A</td>

<td>2026-2027</td>

<td>

<span class="badge bg-success">

Activa

</span>

</td>

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

<td>002</td>

<td>María Gómez</td>

<td>Octavo B</td>

<td>2026-2027</td>

<td>

<span class="badge bg-success">

Activa

</span>

</td>

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