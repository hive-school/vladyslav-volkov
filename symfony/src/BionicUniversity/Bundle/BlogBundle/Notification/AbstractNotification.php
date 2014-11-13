<?php
/**
 * Created by PhpStorm.
 * User: askent
 * Date: 11/13/14
 * Time: 9:18 PM
 */
namespace BionicUniversity\Bundle\BlogBudle\Notification;

use Symfony\Component\Security\Core\SecurityContextInterface;

abstract class AbstractNotification
{
    /**
     * @var SecurityContextInterface
     */
    protected $securityContext;

    /**
     * @param SecurityContextInterface $securityContext
     */
    public function setSecurityContext(SecurityContextInterface $securityContext)
    {
        $this->securityContext = $securityContext;
    }

    abstract public function send();

}