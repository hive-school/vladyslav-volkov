<?php

namespace BionicUniversity\Bundle\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Post", mappedBy="category")
     */
    private $posts;
    /**
     * @var Category
     */
    private $parent;
    private $children;
    private $path;
    private $slug;

    /**
     * @ORM\PrePersist()
     */
    public function updateSlug(){
        $this->slug = \Transliterator::create(1)->transliterate($this->name);
    }

    public function updatePath()
    {
        while (null === $this->parent) {
            $this->path .= '/' . $this->parent->getPath();
        }
    }

    function __toString()
    {
        return $this->name;
    }


    /**
     * @return ArrayCollection
     */
    public function getPosts()
    {
        return $this->posts;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
