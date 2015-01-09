<?php

namespace lnl\lnlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemRelationships
 */
class ItemRelationships
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Items")
     * @var \lnl\lnlBundle\Entity\Items
     */
    private $items;

    /**
     * @var \lnl\lnlBundle\Entity\Categories
     */
    private $categories;


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
     * Get category_id
     *
     * @return integer
     */



    /**
     * Set items
     *
     * @param \lnl\lnlBundle\Entity\Items $items
     * @return ItemRelationships
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

    /**
     * Set categories
     *
     * @param \lnl\lnlBundle\Entity\Categories $categories
     * @return ItemRelationships
     */
    public function setCategories(\lnl\lnlBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \lnl\lnlBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }
    public function __toString() {

          return $this->id;

     }
}
