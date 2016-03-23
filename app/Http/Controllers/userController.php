<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class userController extends BaseController
{
     /**
    * Responds to requests to /user
    */
	
	    public function getUserIndex() {
		//return 'Lorum Ipsum Generator';
		 return view('li.li', ['abc'=>'456', 'lorum'=>'ipsum dorum sut']);
		
       //return view('li.li') -> with('abc', '123');
    }
	
	
	
}
