<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class liController extends BaseController
{
     /**
    * Responds to requests to /li
    */
    public function getLiIndex() {
        return 'Lorum Ipsum Generator';
    }
}
