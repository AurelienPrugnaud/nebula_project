<?php
    namespace Aurelien\Nebula;

    require 'Environment/environment.php';
    use Aurelien\Nebula\Database;
    use Aurelien\Nebula\Page;

    class Router
    {
        public function __construct() {

        }

        public static function getRoute() {
            
            $dbc = new DataBase(MYSQL_HOST, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD);

            $pages = Page::getPagesList($dbc);

            //var_dump($pages);
            foreach ($pages as $page) {
                if ($_SERVER['REQUEST_URI'] == $page['url']) {
                    $page = new \Aurelien\Nebula\Controller\PageController($page['template'] . ".html.twig", ['title' => $page['title']]);
                }
            }
            

        }
    }   