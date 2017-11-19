<?php
$productFactory = AbstractProductFactory::getProductFactoryByColor($color);
$product = $productFactory->build($productType, $post['sku'], $post['name']);