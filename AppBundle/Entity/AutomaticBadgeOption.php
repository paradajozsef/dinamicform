<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 26/04/16
 * Time: 19:30
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="automatic_badge_option")
 * @ORM\Entity
 */
class AutomaticBadgeOption
{

    /**
     * @ORM\Column(name="option_id", type="integer", length=11, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AutomaticBadge", inversedBy="options")
     * @ORM\JoinColumn(name="badge_id", referencedColumnName="badge_id")
     */
    protected $badge;

    /**
     * @ORM\Column(name="key", type="string", length=255, nullable=false)
     */
    protected $key;

    /**
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    protected $value;

    /**
     * @return mixed
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * @param mixed $badge
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


}