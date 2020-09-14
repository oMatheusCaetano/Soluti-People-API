<?php

namespace App\Services;

use App\Telephone;

class TelephoneService extends Service
{

    public function __construct()
    {
        parent::__construct(Telephone::class);
    }
}
