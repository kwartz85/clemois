<?php
/**
 * Created by PhpStorm.
 * User: r-1
 * Date: 23/12/2016
 * Time: 09:42
 */

namespace Imie\Controller;

use Imie\Model\Power;
use Imie\View\View;

class PowerController extends Controller
{


    public function getAllAction()
    {
               return $this->render('power','allPower', [
                   'powers'=>$this->getDoctrine()
                    ->getRepository('\Imie\Model\Power')
                    ->findAll()

               ]);

    }

    public function getOneAction($datas=null)
    {
        if(isset($datas[2])) {
            $this->powerDTO->setPowerId($datas[2]);
            $powerDTO = $this->powerDAO->getOnePower($this->powerDTO);
            return $this->getAllAction($datas,$powerDTO);
        }else{
            header("location: /".PATH."/index.php/power/getAll");
        }
        return null;
    }

    public function InsertAction()
    {
        $this->powerDTO->hydrate($_POST);
        $this->powerDAO->insertPower($this->powerDTO);
        header("location: /". PATH . "/index.php/power/getAll");
    }

    public function UpdateAction($datas=null)
    {
        if(isset($datas[2])) {
            $this->powerDTO->setPowerId($datas[2]);
            $this->powerDTO->hydrate($_POST);
            $this->powerDAO->updatePower($this->powerDTO);
        }
        header("location: /".PATH."/index.php/power/getAll");

    }

    public function deleteAction($datas=null)
    {
        if(isset($datas[2])) {
            $this->powerDTO->setPowerID($datas[2]);
            $this->powerDAO->deletePower($this->powerDTO);
        }
        header("location: /".PATH."/index.php/power/getAll");
    }

}