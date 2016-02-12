<?php

namespace Kilik\TableBundle\Components;

// @todo à déplacer
class Filter
{

    const TYPE_DEFAULT = "like";
    const TYPE_LIKE    = "like";
    const TYPES        = [self::TYPE_LIKE];

    /**
     *
     * @var string 
     */
    private $name;

    /**
     *
     * @var string 
     */
    private $field;

    /**
     * @var string
     */
    private $type = self::TYPE_DEFAULT;

    /**
     * 
     * @param string $name
     * @return static
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 
     * @param string $field
     * @return static
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * 
     * @param string $type
     * @return static
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}