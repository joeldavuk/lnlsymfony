<?php

namespace lnl\lnlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 */
class Items
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Items
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Items
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Items
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Items
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add Categories
     *
     * @param \lnl\lnlBundle\Entity\Categories $categories
     * @return Items
     */
    public function addCategory(\lnl\lnlBundle\Entity\Categories $categories)
    {
        $this->Categories[] = $categories;

        return $this;
    }

    /**
     * Remove Categories
     *
     * @param \lnl\lnlBundle\Entity\Categories $categories
     */
    public function removeCategory(\lnl\lnlBundle\Entity\Categories $categories)
    {
        $this->Categories->removeElement($categories);
    }

    /**
     * Set Categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function setCategory(\lnl\lnlBundle\Entity\Categories $categories)
    {
        $this->Categories[] = $categories;

        return $this;
    }
    /**
     * Get Categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->Categories;
    }
}
