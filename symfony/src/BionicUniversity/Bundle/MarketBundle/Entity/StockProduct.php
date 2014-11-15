<?php
/**
 * Created by PhpStorm.
 * User: askent
 * Date: 11/15/14
 * Time: 4:01 PM
 */

namespace BionicUniversity\Bundle\MarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class VirtualProduct
 * @package BionicUniversity\Bundle\MarketBundle\Entity
 * @ORM\Entity()
 * @ORM\Table()
 */
class StockProduct extends PriceProduct
{
    /**
     * @var
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


}