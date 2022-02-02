<?php 
    namespace Aurelien\Nebula;

    require 'vendor/autoload.php';

    // PDO request
    $pages = [
        'home' => [
            'title' => 'Acceuil',
            'url' => '/',
            'template' => 'home/home',
        ],
        
        'game' => [
            'title' => 'Jeu',
            'url' => '/game',
            'template' => 'game/show',
        ],

        'connection' => [
            'title' => 'Connexion',
            'url' => '/login',
            'template' => 'security/login',
        ],

        'profil' => [
            'title' => 'Profil',
            'url' => '/profil',
            'template' => 'user/user',
        ],

        'registration' => [
            'title' => 'Création de compte',
            'url' => '/register',
            'template' => 'registration/registration',
        ],

        'cart' => [
            'title' => 'Panier',
            'url' => '/cart',
            'template' => 'cart/cart',
        ],

        'contact' => [
            'title' => 'Contact',
            'url' => '/contact',
            'template' => 'contact/contact',
        ],

        'library' => [
            'title' => 'Bibliothèque',
            'url' => '/library',
            'template' => 'library/library',
        ],
    ];

    foreach ($pages as $page) {
        if ($_SERVER['REQUEST_URI'] == $page['url']) {

            $page = new \Aurelien\Nebula\Controller\PageController($page['template'] . ".html.twig", ['title' => $page['title']]);
        }
    }
