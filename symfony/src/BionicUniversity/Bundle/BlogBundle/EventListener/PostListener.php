<?php
namespace BionicUniversity\Bundle\BlogBundle\EventListener;

use BionicUniversity\Bundle\BlogBundle\Entity\Post;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Symfony\Component\Security\Core\SecurityContextInterface;

class PostListener
{

    /**
     * @var SecurityContextInterface
     */
    private $securityContext;

    /**
     * @param SecurityContextInterface $securityContext
     */
    public function setSecurityContext($securityContext)
    {
        $this->securityContext = $securityContext;
    }

    public function prePersist(OnFlushEventArgs $event)
    {
        $entity = $event->getObject();
        if ($entity instanceof Post) {
            $entity->setCreated(new \DateTime);
            if ($this->securityContext->getToken()->isAuthenticated()) {
                $user = new User;
                $event->getObjectManager()->persist($user);
                $entity->setAuthor($user);
            }
        }
    }

}