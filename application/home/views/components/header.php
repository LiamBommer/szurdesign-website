<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>

    <!-- for responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- set base = 127.0.0.1 -->
    <base href="<?php echo base_url();?>">

    <!-- show icon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- use Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Compiled and minified CSS -->
    <!-- 以后需换成本地加载 加快速度 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- link navbar's css -->
    <link rel="stylesheet" href="css/home.css" type="text/css">
</head>
<body >
    <!-- Import jQuery & materialize.js (order!)-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- 以后需换成本地加载 加快速度 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- link home.js-->
    <script src="js/home.js"></script>
