<?php
namespace App\Repositories;

use App\Interfaces\IProduct;
use App\Models\Product;

class ProductRepository extends BaseRepository implements IProduct{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }
}