<?php
// ./src/Controller/Controller.php

namespace Imie\Controller;

use \Imie\View\View;

// Parent controller
class Controller{

    private $em; // doctrine object

    public function __construct($em){
        $this->em = $em;
    }

    public function getDoctrine(){
        return $this->em;
    }

    // Shortcut to render method
    public function render($folder, $file, $data = []){
        $view = new View($folder,$file);
        return $view->renderView($data);
    }
}