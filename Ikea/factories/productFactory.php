<?php
class ProductFactory
{
    public static function build($product_type, $sku, $name)
    {
        $product = "Product" . ucwords($product_type);
        if(class_exists($product))
        {
            return new $product($sku, $name);
        }
        else {
            throw new Exception("Invalid product type given.");
        }
    }
}

//A class cannot anticipate the object types that needs to create beforehand.

//We want to encapsulate the logic for instantiating complex objects.

//We want to reduce tight coupling between our application classes.