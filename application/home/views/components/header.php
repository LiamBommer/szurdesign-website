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
    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <!-- link navbar's css -->
    <link rel="stylesheet" href="css/home.css" type="text/css">
</head>
<body >
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <!-- link home.js-->
    <script src="js/home.js"></script>
