<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $titulo; ?> </title>
    <!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/normalize.css') ?>">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" lang="en" content="open source html and css template">
    <meta name="author" content="mlp design">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
    <!-- Menu Items -->
    <nav>
        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
        <label for="show-menu" class="close"><span class="fa fa-times"></label>
        <ul id="menu">
            <li><a class="active" href="<?php echo base_url() ?>">Home</a></li>
            <li><a href="<?php echo base_url('clientes'); ?>"> Clientes </a></li>
            <li><a href="<?php echo base_url('sobre'); ?>"> Sobre </a></li>
            <li><a href="<?php echo base_url('servicos'); ?>"> Serviços </a></li>
            <li><a href="<?php echo base_url('contato'); ?>"> Contato </a></li>
            <li><a href="#">  </a></li>
        </ul>
    </nav>

    <div id="banner">
        <div id="header">
            <img style="width: 100px;" src="<?php echo base_url('assets/img/logo_mh.png'); ?>">
            <h1> Site feito com Code Igniter </h1>
            <!--<p class="sub">Fluid, responsive website template by MLPdesign.</p>-->
        </div>
    </div>