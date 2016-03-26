<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use Badcow\LoremIpsum\Generator;


class liController extends BaseController
{
     /**
    * Responds to requests to /li
    */
    public function getLiIndex(Request $request) {
		
			$liCount = $request->input('liCount');
			
			if(isset($liCount)&& $liCount > 0 && $liCount<= 20 && $liCount != null){
				//echo 'Set';
				
				$generator = new Generator();
				$paragraphs = $generator->getParagraphs($liCount);
				$liOutput = "";
				
				foreach ($paragraphs as &$value) {
    				$liOutput .=   $value . '<br>';
				}

				
		 		//return 'Lorum Ipsum Generator';
		 		return view('li.li', ['liCount'=>$liCount, 'lorum'=>$paragraphs]);
				
				
				}else{

					//echo 'Not set';
					
					return redirect()->action('homeController@getHomeIndex');
					
				}
			
    }#End getLiIndex()
}#End class liController extends BaseController
