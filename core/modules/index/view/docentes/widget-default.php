<?php
UserData::verificaSession();
?>

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="text-primary fw-bold">
Docentes
</h2>

<button class="btn btn-primary">

<i class="bi bi-plus-circle"></i>

Nuevo docente

</button>

</div>


<div class="card shadow-sm">

<div class="card-header bg-primary text-white">

Listado de docentes

</div>

<div class="card-body">

<table class="table table-hover table-bordered">

<thead class="table-light">

<tr>

<th>Cédula</th>

<th>Nombres</th>

<th>Especialidad</th>

<th>Estado</th>

<th width="180">

Acciones

</th>

</tr>

</thead>

<tbody>

<tr>

<td>1001234567</td>

<td>Pedro Sánchez</td>

<td>Matemáticas</td>

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

<td>1723654987</td>

<td>Ana Martínez</td>

<td>Lengua y Literatura</td>

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

<td>1714789652</td>

<td>Carlos Herrera</td>

<td>Ciencias Naturales</td>

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