<?php
namespace BionicUniversity\Bundle\BlogBundle\EventSubscriber;

use BionicUniversity\Bundle\BlogBundle\BionicUniversityBlogEvents;
use BionicUniversity\Bundle\BlogBundle\Event\PostEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\SecurityContextInterface;

class PostSubscriber implements EventSubscriberInterface
{
    private $securityContext;

    function __construct(SecurityContextInterface $securityContext)
    {
        $this->securityContext = $securityContext;
    }


    public static function getSubscribedEvents()
    {
        return [
            BionicUniversityBlogEvents::POST_CREATE => 'onPostCreate'
        ];
    }


    public function onPostCreate(PostEvent $event)
    {
        var_dump($this->securityContext->getToken()->getUser());
        var_dump($event->getPost());die;
    }
}