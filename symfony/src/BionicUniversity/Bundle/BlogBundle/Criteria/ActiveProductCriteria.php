<?php
namespace BionicUniversity\Bundle\BlogBudle\Criteria;

use Doctrine\Common\Collections\Criteria;

class ActiveProductCriteria extends Criteria
{
    public static function create()
    {
        $criteria = parent::create();
        $criteria
            ->andWhere($criteria->expr()->eq('active', true));
    }

}