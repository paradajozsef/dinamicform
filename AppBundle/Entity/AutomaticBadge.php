<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 26/04/16
 * Time: 19:25
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="product_badges")
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="badge_type", type="string", columnDefinition="ENUM('manual', 'auto')"))
 * @ORM\DiscriminatorMap({"auto" = "AutomaticBadge"})
 */
class AutomaticBadge extends Badge
{

    /**
     * @ORM\Column(name="badge_id", type="integer", length=11, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $badgeId;

    /**
     * @ORM\OneToMany(targetEntity="AutomaticBadgeOption", mappedBy="badge")
     */
    protected $options;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function addOption($opt)
    {
        $this->options->add($opt);
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }


}



