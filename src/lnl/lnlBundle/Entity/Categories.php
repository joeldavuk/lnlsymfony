<?php

namespace lnl\lnlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 */
class Categories
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
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $itemRelationships;

    /**
     * @var \lnl\lnlBundle\Entity\Categories
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->itemRelationships = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Categories
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
     * @return Categories
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
     * Set image
     *
     * @param string $image
     * @return Categories
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add children
     *
     * @param \lnl\lnlBundle\Entity\Categories $children
     * @return Categories
     */
    public function addChild(\lnl\lnlBundle\Entity\Categories $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \lnl\lnlBundle\Entity\Categories $children
     */
    public function removeChild(\lnl\lnlBundle\Entity\Categories $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add itemRelationships
     *
     * @param \lnl\lnlBundle\Entity\ItemRelationships $itemRelationships
     * @return Categories
     */
    public function addItemRelationship(\lnl\lnlBundle\Entity\ItemRelationships $itemRelationships)
    {
        $this->itemRelationships[] = $itemRelationships;

        return $this;
    }

    /**
     * Remove itemRelationships
     *
     * @param \lnl\lnlBundle\Entity\ItemRelationships $itemRelationships
     */
    public function removeItemRelationship(\lnl\lnlBundle\Entity\ItemRelationships $itemRelationships)
    {
        $this->itemRelationships->removeElement($itemRelationships);
    }

    /**
     * Get itemRelationships
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItemRelationships()
    {
        return $this->itemRelationships;
    }

    /**
     * Set parent
     *
     * @param \lnl\lnlBundle\Entity\Categories $parent
     * @return Categories
     */
    public function setParent(\lnl\lnlBundle\Entity\Categories $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \lnl\lnlBundle\Entity\Categories 
     */
    public function getParent()
    {
        return $this->parent;
    }

    public function __toString() {  return $this->title; }
}
