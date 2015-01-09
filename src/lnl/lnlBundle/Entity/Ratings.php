<?php

namespace lnl\lnlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ratings
 */
class Ratings
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $dateOf;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var \lnl\lnlBundle\Entity\Items
     */
    private $items;


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
     * Set author
     *
     * @param string $author
     * @return Ratings
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set dateOf
     *
     * @param \DateTime $dateOf
     * @return Ratings
     */
    public function setDateOf($dateOf)
    {
        $this->dateOf = $dateOf;

        return $this;
    }

    /**
     * Get dateOf
     *
     * @return \DateTime 
     */
    public function getDateOf()
    {
        return $this->dateOf;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Ratings
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Ratings
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set items
     *
     * @param \lnl\lnlBundle\Entity\Items $items
     * @return Ratings
     */
    public function setItems(\lnl\lnlBundle\Entity\Items $items = null)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return \lnl\lnlBundle\Entity\Items 
     */
    public function getItems()
    {
        return $this->items;
    }
}
