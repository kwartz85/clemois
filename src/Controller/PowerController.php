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


    public function InsertAction($args)
        {
       $power = new Power();
       $em = $this->getDoctrine();


       if (isset($_POST['powerName'])&& isset($_POST['powerDesc'])){
           $power->setPowerDesc(strip_tags($_POST['powerDesc']));
           $power->setPowerName($_POST['powerName']);
           $em->persist($power);
           $em->flush();

           header("location: ". PATH . "/index.php/power/getAll");

       }

        return $this->render('power','insert',[
            "power" => $power
        ]);
    }

    public function UpdateAction($args)
    {
        if(!isset($args[2])){
            header("location: /".PATH."/index.php/power/getAll");

        }

        $em = $this->getDoctrine();
        $power = $em->getRepository('\Imie\Model\Power')
                    ->find($args[2])
                    ->flush();


        return $this->render('power', 'update', [
            "power" => $power
        ]);



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