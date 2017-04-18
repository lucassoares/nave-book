<?php
    ini_set('mbstring.internal_encoding','UTF-8');
    ini_set('mbstring.func_overload',7);
    header('Content-type: text/html; charset=utf-8');
    setlocale( LC_ALL, 'pt_BR.utf-8', 'pt_BR', 'Portuguese_Brazil');
?>
<html>
<head>
    <title>NAVE - BOOK</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="assets/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/footer.css" rel="stylesheet" />
    <link href="assets/css/header.css" rel="stylesheet" />
    <link href="assets/css/about.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top my-nav">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand main-header-text">NAVE</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a target="_blank" href="/">Horarios</a></li>
                    <li><a target="_blank" href="/images.php">Imagens</a></li>
                    <li><a target="_blank" href="/about.php">Sobre</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="principal">