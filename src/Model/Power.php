<?php
/**
 * Created by PhpStorm.
 * User: r-1
 * Date: 08/11/2016
 * Time: 10:18
 */

namespace Imie\Model;

/**
 * @Entity
 * @Table(name="power")
 */
class Power
{
    //************************** Attributes ****************************************/
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
    * @Column(type="string")
    */
    private $powerName;
    /**
     * @Column(type="string")
     */
    private $powerDesc;
    /**
     * @ManytoOne(targetEntity="HeroPower", inversedBy="power")
     */
    private $heroPower;

    //***************************Getters and setters *******************************/


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPowerName()
    {
        return $this->powerName;
    }

    /**
     * @param mixed $powerName
     */
    public function setPowerName($powerName)
    {
        $this->powerName = $powerName;
    }

    /**
     * @return mixed
     */
    public function getPowerDesc()
    {
        return $this->powerDesc;
    }

    /**
     * @param mixed $powerDesc
     */
    public function setPowerDesc($powerDesc)
    {
        $this->powerDesc = $powerDesc;
    }



}