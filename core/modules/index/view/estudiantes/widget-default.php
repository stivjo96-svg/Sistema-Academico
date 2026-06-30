<?php
UserData::verificaSession();
?>

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="text-success fw-bold">
Estudiantes
</h2>

<button class="btn btn-success">

<i class="bi bi-plus-circle"></i>

Nuevo estudiante

</button>

</div>


<div class="card shadow-sm">

<div class="card-header bg-success text-white">

Listado de estudiantes

</div>

<div class="card-body">

<table class="table table-hover table-bordered">

<thead class="table-light">

<tr>

<th>Cédula</th>

<th>Nombres</th>

<th>Curso</th>

<th>Estado</th>

<th width="180">

Acciones

</th>

</tr>

</thead>

<tbody>

<tr>

<td>1723456789</td>

<td>Sofía Andrade</td>

<td>Décimo A</td>

<td>

<span class="badge bg-success">

Activo

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

<td>1714567890</td>

<td>Mateo Pérez</td>

<td>Noveno B</td>

<td>

<span class="badge bg-success">

Activo

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