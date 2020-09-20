<?php

namespace App\Services;

use App\Telephone;

class TelephoneService extends Service
{

    public function __construct()
    {
        parent::__construct(Telephone::class);
    }

    public function create(array $data)
    {
        if (isset($data['number']) && !empty($data['number'])) {
            return Telephone::create($data);
        }
    }
}
