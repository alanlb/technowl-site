<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TechnOwl - Desenvolvimento de Softwares</title>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/<?php echo $style;?>.css">
    <link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="css/plugins.css">
</head>

<body id="body">
    <header>
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" id="navbar-bg">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.html">
                            <img src="images/logo.png" alt="logo Topo Tag">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="http://localhost/technowl-site/index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://localhost/technowl-site/sobre.php">Sobre</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://localhost/technowl-site/equipe.php">Equipe</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://localhost/technowl-site/contato.php">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s"><strong><?php echo $title;?></strong></h1>
            <h3 class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><strong><?php echo $subtitle;?></strong></h3>
        </div>
    </header>
    <main>