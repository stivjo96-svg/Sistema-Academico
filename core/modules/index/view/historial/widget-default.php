<?php
UserData::verificaSession();
?>

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="text-info fw-bold">

Historial Académico

</h2>

<button class="btn btn-info text-white">

<i class="bi bi-clock-history"></i>

Consultar historial

</button>

</div>


<div class="card shadow-sm">

<div class="card-header bg-info text-white">

Historial de matrículas

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

</tr>

</thead>

<tbody>

<tr>

<td>001</td>

<td>Juan Pérez</td>

<td>Décimo A</td>

<td>2025-2026</td>

<td>

<span class="badge bg-success">

Aprobado

</span>

</td>

</tr>

<tr>

<td>002</td>

<td>María Gómez</td>

<td>Noveno B</td>

<td>2024-2025</td>

<td>

<span class="badge bg-primary">

Promovido

</span>

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>