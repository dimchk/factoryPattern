<?php

abstract class AbstractProductFactory
{
    protected static $color;

    public static function getProductFactoryByColor($color)
    {
        self::$color = $color;

        if (self::$color->isSpecial()) {
            return new specialColorProductFactory();
        } else {
            return new standardColorProductFactory();
        }
    }

    public abstract function build($product_type, $sku, $name);
}