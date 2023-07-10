<?php
namespace App\Repositories;

use App\Interfaces\ICart;
use App\Models\Cart;

class CartRepository extends BaseRepository implements ICart{
    public function __construct(Cart $cart)
    {
        parent::__construct($cart);
    }
}