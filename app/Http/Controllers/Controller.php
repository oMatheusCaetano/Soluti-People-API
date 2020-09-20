<?php

namespace App\Http\Controllers;

use App\Http\Traits\Messenger;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use Messenger;
}
