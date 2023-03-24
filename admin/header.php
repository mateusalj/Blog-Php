<?php
include_once('../config/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
         <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <style>
        #sidebarMenu, .nav-item  {
            padding-top: 10px;
            padding-right: 5px;
            padding-bottom: 10px;
            padding-left: 5px;
        }
        .nav-item>a{
            margin: left 20px;
        }
    </style>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
            <h2>Bom dia <?php echo $_SESSION['nome'];?></h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="view2.php" class="nav-item">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="insert.php" class="nav-item">Inserir</a>
                </li>
                <li class="nav-item">
                <p><a href="?sair">Deslogar</a></p>
                </li>
            </ul>
        </nav>
 