<?php
namespace App\Repositories;

use App\Interfaces\IDiscount;
use App\Models\Discount;

class DiscountRepository extends BaseRepository implements IDiscount{
    public function __construct(Discount $discount)
    {
        parent::__construct($discount);
    }
}