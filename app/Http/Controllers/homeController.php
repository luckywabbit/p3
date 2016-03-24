<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class homeController extends BaseController
{
     /**
    * Responds to requests to /
    */
    public function getHomeIndex() {
		//return 'Lorum Ipsum Generator';
		
		
		
		
		
		 return view('home.home', ['abc'=>'123', 'lorum'=>'ipsum']);
		
      
    }
}
