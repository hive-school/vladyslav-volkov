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
class VirtualProduct extends PriceProduct
{

    /**
     * @var
     * @ORM\Column(type="boolean")
     */
    private $downloaded;

    /**
     * @return mixed
     */
    public function isDownloaded()
    {
        return $this->downloaded;
    }

    /**
     * @param mixed $downloaded
     */
    public function setDownloaded($downloaded)
    {
        $this->downloaded = $downloaded;
    }


}