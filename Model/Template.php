<?php

namespace Aurelien\Nebula;

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;

class Template {

    public function __construct() {
        $this->loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/View');
        $this->twig = new Environment($this->loader);
    }

    public function display(string $template, array $data) {
        echo $this->twig->render($template, $data);
    }
}