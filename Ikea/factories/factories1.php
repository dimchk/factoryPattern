<?php
$product = new ProductChair('0001','INGOLF Chair');
$product = new ProductTable('0002','STOCKHOLN Table');
$product = new ProductSofa('0003','KARLSTAD Sofa');

//http://ikea.com/product/create/{productType}

switch ($productType){
    case 'chair' :
        new ProductChair('0001','Chair');
        break;
    case 'table' :
        new ProductTable('0002','Table');
        break;
        //...........
}