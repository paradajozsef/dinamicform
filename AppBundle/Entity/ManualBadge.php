<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 26/04/16
 * Time: 19:25
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Aurora\ShopBundle\Entity\Product;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 */
class ManualBadge extends Badge
{



    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @return ArrayCollection $products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $this->products->add($product);
    }

    /**
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->remove($product);
    }
}