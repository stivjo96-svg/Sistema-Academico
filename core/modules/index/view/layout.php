<!doctype html>
<html lang="es">

<head>

<meta charset="utf-8">

<title>Académica | Sistema Académico Escolar</title>

<meta name="viewport"
content="width=device-width, initial-scale=1">

<meta name="title"
content="Académica | Sistema Académico Escolar">

<meta name="author"
content="Stiven">

<meta name="description"
content="Sistema Académico Escolar Académica">

<link rel="preload"
href="dist/css/adminlte.css"
as="style">

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css">

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css">

<link
rel="stylesheet"
href="dist/css/adminlte.css">

<style>

.brand-text{

font-weight:600;

font-size:18px;

color:white;

}

.text-academica{

color:#16B5C4;

font-weight:600;

}

.nav-header{

color:#16B5C4 !important;

font-weight:600;

}

.nav-link:hover{

background:#052C73 !important;

}

.app-header{

border-bottom:1px solid #e7e7e7;

}

.sidebar-brand{

background:#052C73;

}

.app-sidebar{

background:#052C73 !important;

}

.nav-sidebar .nav-link.active{

background:#16B5C4 !important;

}

.btn-primary{

background:#052C73;

border-color:#052C73;

}

.btn-primary:hover{

background:#031D52;

border-color:#031D52;

}

</style>

</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

<nav class="app-header navbar navbar-expand bg-body">

<div class="container-fluid">

<ul class="navbar-nav">

<li class="nav-item">

<a

class="nav-link"

data-lte-toggle="sidebar"

href="#"

role="button">

<i class="bi bi-list"></i>

</a>

</li>

<li class="nav-item d-none d-md-block">

<a class="nav-link">

<b>

Académica

</b>

<span class="text-academica">

| Sistema Académico Escolar

</span>

</a>

</li>

</ul>

<ul class="navbar-nav ms-auto">

<li class="nav-item">

<span

class="nav-link fw-semibold"

style="color:#16B5C4;">

Organiza. Enseña. Aprende. Crece.

</span>

</li>

</ul>

</div>

</nav>

<?php if(isset($_SESSION['user_cedula'])){ ?>

<aside

class="app-sidebar shadow"

data-bs-theme="dark">

<div class="sidebar-brand">

<a href="./index.php"

class="brand-link">

<img

src="uploads/img/logo_academica.png"

alt="Académica"

class="brand-image opacity-75 shadow">

<span class="brand-text">

Académica

</span>

</a>

</div>

<div class="sidebar-wrapper">

<nav class="mt-2">

<ul

class="nav sidebar-menu flex-column"

data-lte-toggle="treeview"

role="menu"

data-accordion="false">

<li class="nav-header">

ACADÉMICA

</li>

<li class="nav-item menu-open">

<a href="#"

class="nav-link active">

<i class="nav-icon bi bi-house-fill"></i>

<p>

INICIO

<i class="nav-arrow bi bi-chevron-right"></i>

</p>

</a>

<ul class="nav nav-treeview">

<li class="nav-item">

<a href="./?view=index"

class="nav-link">

<i class="bi bi-speedometer2 nav-icon"></i>

<p>

Dashboard

</p>

</a>

</li>

</ul>

</li>

<li class="nav-item">

<a href="#"

class="nav-link">

<i class="nav-icon bi bi-mortarboard-fill"></i>

<p>

Académico

<i class="nav-arrow bi bi-chevron-right"></i>

</p>

</a>

<ul class="nav nav-treeview">

<li class="nav-item">

<a href="./?view=estudiantes"

class="nav-link">

<i class="bi bi-circle nav-icon"></i>

<p>Estudiantes</p>

</a>

</li>

<li class="nav-item">

<a href="./?view=docentes"

class="nav-link">

<i class="bi bi-circle nav-icon"></i>

<p>Docentes</p>

</a>

</li>

<li class="nav-item">

<a href="./?view=asignaturas"

class="nav-link">

<i class="bi bi-circle nav-icon"></i>

<p>Asignaturas</p>

</a>

</li>

</ul>

</li>



<li class="nav-item">

<a href="#"

class="nav-link">

<i class="nav-icon bi bi-journal-check"></i>

<p>

Matrículas

<i class="nav-arrow bi bi-chevron-right"></i>

</p>

</a>

<ul class="nav nav-treeview">

<li class="nav-item">

<a href="./?view=matriculas"

class="nav-link">

<i class="bi bi-circle nav-icon"></i>

<p>Nueva matrícula</p>

</a>

</li>

<li class="nav-item">

<a href="./?view=historial"

class="nav-link">

<i class="bi bi-circle nav-icon"></i>

<p>Historial</p>

</a>

</li>

</ul>

</li>



<li class="nav-item">

<a href="#"

class="nav-link">

<i class="nav-icon bi bi-bar-chart-fill"></i>

<p>

Reportes

<i class="nav-arrow bi bi-chevron-right"></i>

</p>

</a>

<ul class="nav nav-treeview">

<li class="nav-item">

<a href="./?view=notas"

class="nav-link">

<i class="bi bi-circle nav-icon"></i>

<p>Notas</p>

</a>

</li>

<li class="nav-item">

<a href="./?view=asistencia"

class="nav-link">

<i class="bi bi-circle nav-icon"></i>

<p>Asistencia</p>

</a>

</li>

</ul>

</li>



<li class="nav-header">

CUENTA

</li>



<li class="nav-item">

<a href="./?view=perfil"

class="nav-link">

<i class="nav-icon bi bi-person-circle"></i>

<p>

Perfil

</p>

</a>

</li>



<li class="nav-item">

<a href="./?view=logout"

class="nav-link">

<i class="nav-icon bi bi-box-arrow-right"></i>

<p>

Salir

</p>

</a>

</li>

</ul>

</nav>

</div>

</aside>

<?php } ?>

<main class="app-main">

<div class="app-content-header">

<div class="container-fluid">

<div class="row">

<div class="col-sm-6">

<?php if(isset($_SESSION['user_cedula'])){ ?>

<h3

class="mb-0"

style="color:#052C73;font-weight:700;">

Académica

</h3>

</div>

<div class="col-sm-6">

<ol class="breadcrumb float-sm-end">

<li class="breadcrumb-item">

Inicio

</li>

<li class="breadcrumb-item active"

style="color:#16B5C4;">

Académica

</li>

</ol>

</div>

</div>

</div>

</div>

<?php } ?>

<div class="app-content">

<div class="container">

<?php

if(isset($_SESSION['user_cedula'])){

    View::load("index");

}else{

    View::load("login");

}

?>

</div>

</div>

</main>

<!-- FIN DEL CONTENIDO -->

<footer class="app-footer">

<div
class="float-end d-none d-sm-inline"
style="color:#16B5C4;">

Organiza. Enseña. Aprende. Crece.

</div>

<strong
style="color:#052C73;">

Académica © 2026

</strong>

<span
style="color:#6c757d;">

Sistema Académico Escolar

</span>

</footer>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>

<script src="dist/js/adminlte.js"></script>

<script>

const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';

const Default = {

scrollbarTheme: 'os-theme-light',

scrollbarAutoHide: 'leave',

scrollbarClickScroll: true

};

document.addEventListener(

"DOMContentLoaded",

function(){

const sidebarWrapper = document.querySelector(

SELECTOR_SIDEBAR_WRAPPER

);

if(sidebarWrapper){

OverlayScrollbars(

sidebarWrapper,

Default

);

}

}

);

</script>

</body>

</html>