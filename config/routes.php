<?php
 return array(

     //пользователь
     'user/login' => 'user/login',//actionLogin in UserController
     'user/logout' => 'user/logout',//actionLogout in UserController
     'user/register' => 'user/register',//actionRegister in UserController
     'user/edit' => 'cabinet/edit',//actionEdit in CabinetController
     'cabinet/edit' => 'cabinet/edit',//actionEdit in CabinetController
     'cabinet' => 'cabinet/index',//actionIndex in CabinetController
     //управление новостями
     'admin/news/create' => 'adminNews/create',
     'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
     'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
     'admin/news' => 'adminNews/index',
     //управление продуктами
     'admin/products/create' => 'adminProducts/create',
     'admin/products/update/([0-9]+)' => 'adminProducts/update/$1',
     'admin/products/delete/([0-9]+)'=> 'adminProducts/delete/$1',
     'admin/products' => 'adminProducts/index',
     //управление галереей
     'admin/gallery/create' => 'adminGallery/create',
     'admin/gallery/update/([0-9]+)' => 'adminGallery/update/$1',
     'admin/gallery/delete/([0-9]+)'=> 'adminGallery/delete/$1',
     'admin/gallery' => 'adminGallery/index',
     //админпанель
     'admin' => 'admin/index',//actionIndex in AdminController
     //галлерея
     'gallery' => 'gallery/index',
     //продукты
     'products' => 'products/list',//actionList in PriceController
     //новости
     'news' => 'news/list', //actionList in NewsController
     //главная страница
     'index.php' => 'site/index', // actionIndex в SiteController
     '' => 'site/index',//actionIndex in SiteController
 );