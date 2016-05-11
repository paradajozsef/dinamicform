<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Product
 *
 * @ORM\Table(name="`product`")
 * @ORM\Entity()
 */
class Product
{

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", columnDefinition="INT(11) NOT NULL AUTO_INCREMENT")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $productId;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=128, nullable=false)
     */
    protected $model = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=128, nullable=false)
     */
    protected $sku;
}