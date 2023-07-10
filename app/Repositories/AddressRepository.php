<?php
namespace App\Repositories;

use App\Interfaces\IAddress;
use App\Models\Address;

class AddressRepository extends BaseRepository implements IAddress{
    public function __construct(Address $address)
    {
        parent::__construct($address);
    }
}