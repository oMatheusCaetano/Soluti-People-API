<?php

namespace App\Services;

use App\Address;

class AddressService extends Service
{

    public function __construct()
    {
        parent::__construct(Address::class);
    }
}
