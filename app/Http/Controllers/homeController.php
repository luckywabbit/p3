<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class homeController extends BaseController
{
     /**
    * Responds to requests to /
    */
    public function getHomeIndex(Request $request) {


		
		 return view('home.home');
		
      
    }
}
