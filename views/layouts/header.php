<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Alisa</title>

    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

    <style type="text/css" media="all">
        @import url("/template/css/style.css");
        @import url("/template/css/nivo-slider.css");
        @import url("/template/css/custom-nivo-slider.css");
        @import url("/template/css/jquery.fancybox.css");
    </style>

    <!--[if lt IE 8]><style type="text/css" media="all">@import url("/template/css/ie.css");</style><![endif]-->

</head>


<body>

<div id="bgc">

    <div class="wrapper">		<!-- wrapper begins -->

        <div id="header">

            <h1><a href="/"><span>Alisa</span></a></h1>
            <ul>
                <li><a href="/">Главная</a></li>
                <!--                <li><a href="page.html">О нас</a></li>-->
                <li><a href="/news">Акции</a></li>
                <li><a href="/products">Напитки</a></li>
                <li><a href="/gallery">Галерея</a></li>
                <?php if (User::isGuest()): ?>
                    <li><a href="/user/login/">Вход</a></li>
                    <li><a href="/user/register/">Регистрация</a></li>
                <?php else: ?>
                    <li><a href="/cabinet/">Личный кабинет</a></li>
                    <li><a href="/user/logout/"> Выход</a></li>
                <?php endif; ?>
            </ul>
        </div>		<!-- #header ends -->