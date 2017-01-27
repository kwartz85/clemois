<?php

/**
 * Created by PhpStorm.
 * User: r-1
 * Date: 21/12/2016
 * Time: 11:38
 */
namespace Imie\Controller;

use Imie\Controller\Controller;
use Imie\View\View;

class DefaultController extends Controller
{
    public function indexAction(){
        $view = new View('default','index');
        return $view->renderView([]);

    }

}