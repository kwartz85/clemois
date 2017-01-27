<?php
/**
 * Created by PhpStorm.
 * User: r-1
 * Date: 23/12/2016
 * Time: 15:15
 */

namespace Imie\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="hero_power")
 */
class HeroPower
{
    //************************** Attributes ****************************************/
    /**
    * @Id
    * @GeneratedValue
    * @Column(type="integer")
    **/
    private $id;

    /**
     * @Column(type="integer")
     **/
    private $heroPowerHeroID;

    /**
     * @Column(type="integer")
     **/
    private $heroPowerPowerId;

    /**
     * @Column(type="integer")
     **/
    private $heroPowerLevel;

     /* Add * to Annotate
     * @OneToMany(targetEntity="Hero", mappedBy="heroPower")
     */
    private $hero;
    /**
     * @OneToMany(targetEntity="Power", mappedBy="heroPower")
     */
    private $power;


    //***************************Getters and setters *******************************/


    public function getId()
    {
        return $this->id;
    }

    public function getHeroPowerHeroID()
    {
        return $this->heroPowerHeroID;
    }

    public function setHeroPowerHeroID($heroPowerHeroID)
    {
        $this->heroPowerHeroID = $heroPowerHeroID;
    }

    public function getHeroPowerPowerId()
    {
        return $this->heroPowerPowerId;
    }

    public function setHeroPowerPowerId($heroPowerPowerId)
    {
        $this->heroPowerPowerId = $heroPowerPowerId;
    }

    public function getHeroPowerLevel()
    {
        return $this->heroPowerLevel;
    }

    public function setHeroPowerLevel($heroPowerLevel)
    {
        $this->heroPowerLevel = $heroPowerLevel;
    }




}