<?php
UserData::verificaSession();
?>

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold" style="color:#052C73;">
            Gestión de Usuarios
        </h2>

        <button class="btn text-white"
                style="background:#052C73;">

            <i class="bi bi-plus-circle"></i>

            Nuevo Usuario

        </button>

    </div>


    <div class="card shadow">

        <div class="card-header text-white"
            style="background:#052C73;">

            Listado de Usuarios

        </div>

        <div class="card-body">

            <table class="table table-hover table-bordered align-middle">

                <thead class="table-light">

                    <tr>

                        <th>Cédula</th>

                        <th>Nombre</th>

                        <th>Usuario</th>

                        <th>Rol</th>

                        <th>Estado</th>

                        <th width="170">Acciones</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1723456789</td>

                        <td>VALLEJO STIVEN</td>

                        <td>stiven</td>

                        <td>

                            <span class="badge bg-primary">

                                Administrador

                            </span>

                        </td>

                        <td>

                            <span class="badge bg-success">

                                Activo

                            </span>

                        </td>

                        <td>

                            <button class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </button>

                            <button class="btn btn-danger btn-sm">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>1714567890</td>

                        <td>MARÍA GONZÁLEZ</td>

                        <td>maria</td>

                        <td>

                            <span class="badge bg-info">

                                Docente

                            </span>

                        </td>

                        <td>

                            <span class="badge bg-success">

                                Activo

                            </span>

                        </td>

                        <td>

                            <button class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </button>

                            <button class="btn btn-danger btn-sm">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>1756789012</td>

                        <td>JUAN PÉREZ</td>

                        <td>jperez</td>

                        <td>

                            <span class="badge bg-secondary">

                                Secretario

                            </span>

                        </td>

                        <td>

                            <span class="badge bg-danger">

                                Inactivo

                            </span>

                        </td>

                        <td>

                            <button class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </button>

                            <button class="btn btn-danger btn-sm">

                                <i class="bi bi-trash"></i>

                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>