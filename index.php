<?php 
    namespace Aurelien\Nebula;
    require 'vendor/autoload.php';
    //require 'Environment/environment.php';
    //use Aurelien\Nebula\Database;
    //use Aurelien\Nebula\Page;
    use Aurelien\Nebula\Router;

    $router = Router::getRoute();

    

    //$dbc = new DataBase(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);

    // $page= Page::addPage($dbc, 0,'Acceuil', 'home/home', '/');
    // $page= Page::addPage($dbc, 1,'Jeu', 'game/show', '/game');
    // $page= Page::addPage($dbc, 2,'Connexion', 'security/login', '/login');
    // $page= Page::addPage($dbc, 3,'Profil', 'user/user', '/profil');
    // $page= Page::addPage($dbc, 4,'Création de compte', 'registration/registration', '/register');
    // $page= Page::addPage($dbc, 5,'Panier', 'cart/cart', '/cart');
    // $page= Page::addPage($dbc, 6,'Contact', 'contact/contact', '/contact');
    // $page= Page::addPage($dbc, 7,'Bibliothèque', 'library/library', '/library');


    // PDO request
    // $pages = [
    //     'home' => [
    //         'title' => 'Acceuil',
    //         'url' => '/',
    //         'template' => 'home/home',
    //     ],
        
    //     'game' => [
    //         'title' => 'Jeu',
    //         'url' => '/game',
    //         'template' => 'game/show',
    //     ],

    //     'connection' => [
    //         'title' => 'Connexion',
    //         'url' => '/login',
    //         'template' => 'security/login',
    //     ],

    //     'profil' => [
    //         'title' => 'Profil',
    //         'url' => '/profil',
    //         'template' => 'user/user',
    //     ],

    //     'registration' => [
    //         'title' => 'Création de compte',
    //         'url' => '/register',
    //         'template' => 'registration/registration',
    //     ],

    //     'cart' => [
    //         'title' => 'Panier',
    //         'url' => '/cart',
    //         'template' => 'cart/cart',
    //     ],

    //     'contact' => [
    //         'title' => 'Contact',
    //         'url' => '/contact',
    //         'template' => 'contact/contact',
    //     ],

    //     'library' => [
    //         'title' => 'Bibliothèque',
    //         'url' => '/library',
    //         'template' => 'library/library',
    //     ],
    // ];

    // foreach ($pages as $page) {
    //     if ($_SERVER['REQUEST_URI'] == $page['url']) {

    //         $page = new \Aurelien\Nebula\Controller\PageController($page['template'] . ".html.twig", ['title' => $page['title']]);
    //     }
    // }
