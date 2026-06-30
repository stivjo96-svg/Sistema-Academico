<?php
UserData::verificaSession();
?>

<div class="container-fluid">

<h2 class="fw-bold text-warning mb-4">

Control de Asistencia

</h2>

<div class="card shadow">

<div class="card-header bg-warning">

Registro de asistencia

</div>

<div class="card-body">

<table class="table table-hover table-bordered">

<thead>

<tr>

<th>Estudiante</th>

<th>Presente</th>

<th>Ausente</th>

<th>Tardanza</th>

</tr>

</thead>

<tbody>

<tr>

<td>Juan Pérez</td>

<td>

<span class="badge bg-success">

Sí

</span>

</td>

<td>No</td>

<td>No</td>

</tr>

<tr>

<td>María Gómez</td>

<td>

<span class="badge bg-success">

Sí

</span>

</td>

<td>No</td>

<td>

<span class="badge bg-warning">

Sí

</span>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>