<?php

abstract class Product
{
    private $sku;
    private $name;
    protected $type = null;

    public function __construct($sku, $name)
    {
        $this->sku = $sku;
        $this->name = $name;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }
}
