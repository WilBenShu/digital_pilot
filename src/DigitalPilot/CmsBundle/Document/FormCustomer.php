<?php

namespace DigitalPilot\CmsBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="DigitalPilot\CmsBundle\Repository\FormCustomerRepository")
 */
class FormCustomer
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $label;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\String
     */
    protected $type;

    /**
     * @Assert\NotBlank()
     *
     * @MongoDB\Boolean
     */
    protected $isActif;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Get label
     *
     * @return string $label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isActif
     *
     * @param boolean $isActif
     * @return self
     */
    public function setIsActif($isActif)
    {
        $this->isActif = $isActif;
        return $this;
    }

    /**
     * Get isActif
     *
     * @return boolean $isActif
     */
    public function getIsActif()
    {
        return $this->isActif;
    }
}
