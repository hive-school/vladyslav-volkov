<?php

namespace BionicUniversity\Bundle\MarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PriceProduct
 * @package BionicUniversity\Bundle\MarketBundle\Entity
 * @ORM\MappedSuperclass()
 */
class PriceProduct extends AbstractProduct
{
    /**
     * @ORM\Column(type="float")
     * @var
     */
    protected $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}