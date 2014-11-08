<?php
namespace BionicUniversity\Bundle\BlogBundle\EventSubscriber;


use BionicUniversity\Bundle\BlogBundle\Entity\Post;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class PostEntitySubscriber
{

    public function prePersist(LifecycleEventArgs $event)
    {
        $this->updateCommentsCount($event->getObject());
    }

    private function updateCommentsCount(Post $post)
    {
        $post->updateCommentsCounter();
    }
}