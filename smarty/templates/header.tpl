{config_load file="main.conf"}
<!doctype html>
<html lang="{#lang#}">
<head>
    <meta charset="{#charset#}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <title>
        {#main_title#}
    </title>
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="author" content="{#author#}" />
    <meta property="og:site_name" content="{#main_title#}" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="_css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/fancybox.css">
    <link rel="stylesheet" href="_css/styles.css">
    <link rel="stylesheet" href="_css/responsive.css">
</head>
<body>

{config_load file="main.conf" section="header"}
<header class="main-header">
    <div class="container-fluid">
        <div class="logo">
            <a href="{#href_logo#}"><img src="{#img_logo#}" alt="{#alt_logo#}"></a>
        </div>
    {include file="navmenu.tpl"}
    </div>
    <div class="menu-button">
        <span></span>
    </div>
    {include file="pre-title.tpl"}
</header>