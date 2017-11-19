<?php

class standardColorProductFactory extends AbstractProductFactory
{
    public function build($product_type, $sku, $name)
    {
        $product = "Product" . ucwords($product_type);
        if(class_exists($product))
        {
            $product = new $product($sku, $name);
            $product->setColor(static::$color);
            $product->setIsColorSpecial(false);
            return $product;
        }
        else {
            throw new Exception("Invalid product type given.");
        }
    }
}