<?php
namespace BionicUniversity\Bundle\BlogBundle\Event;

use BionicUniversity\Bundle\BlogBundle\Entity\Post;
use Symfony\Component\EventDispatcher\Event;

class PostEvent extends Event
{
    /**
     * @var Post
     */
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * @return Post
     */
    public function getPost()
    {
        return $this->post;
    }

}