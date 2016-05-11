<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 26/04/16
 * Time: 19:23
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="product_badges")
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="badge_type", type="string", columnDefinition="ENUM('manual', 'auto')"))
 * @ORM\DiscriminatorMap({"manual" = "ManualBadge"})
 */
abstract class Badge
{
    /**
     * @ORM\Column(name="badge_id", type="integer", length=11, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $badgeId;

    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @ORM\Column(name="custom", type="integer", length=1, nullable=false)
     */
    protected $custom;

    /**
     * @ORM\Column(name="active", type="integer", length=1, nullable=false)
     */
    protected $active;

    /**
     * @ORM\Column(name="`order`", type="integer", length=11, nullable=false)
     */
    protected $order = '0';

    /**
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    protected $description;


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param mixed $custom
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}