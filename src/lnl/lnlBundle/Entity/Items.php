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
     * @ORM\OneToMany(targetEntity="Categories", mappedBy="items")
     */
    private $itemRelationships;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $meta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ratings;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itemRelationships = new \Doctrine\Common\Collections\ArrayCollection();
        $this->meta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ratings = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add itemRelationships
     *
     * @param \lnl\lnlBundle\Entity\ItemRelationships $itemRelationships
     * @return Items
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
     * Add meta
     *
     * @param \lnl\lnlBundle\Entity\Meta $meta
     * @return Items
     */
    public function addMetum(\lnl\lnlBundle\Entity\Meta $meta)
    {
        $this->meta[] = $meta;

        return $this;
    }

    /**
     * Remove meta
     *
     * @param \lnl\lnlBundle\Entity\Meta $meta
     */
    public function removeMetum(\lnl\lnlBundle\Entity\Meta $meta)
    {
        $this->meta->removeElement($meta);
    }

    /**
     * Get meta
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Add ratings
     *
     * @param \lnl\lnlBundle\Entity\Ratings $ratings
     * @return Items
     */
    public function addRating(\lnl\lnlBundle\Entity\Ratings $ratings)
    {
        $this->ratings[] = $ratings;

        return $this;
    }

    /**
     * Remove ratings
     *
     * @param \lnl\lnlBundle\Entity\Ratings $ratings
     */
    public function removeRating(\lnl\lnlBundle\Entity\Ratings $ratings)
    {
        $this->ratings->removeElement($ratings);
    }

    /**
     * Get ratings
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRatings()
    {
        return $this->ratings;
    }

    public function __toString() {  return $this->title; }
}
