<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Badcow\LoremIpsum\Generator;


class liController extends BaseController
{
     /**
    * Responds to requests to /li
    */
    public function getLiIndex() {
		
			if (isset($_GET["liCount"]) && $_GET["liCount"] > 0 ) {
				
				$generator = new Generator();
				$paragraphs = $generator->getParagraphs($_GET["liCount"]);
				//$liOutput = implode('<p>', $paragraphs);
				$liOutput = "";
				
foreach ($paragraphs as &$value) {
    $liOutput .=   $value . '<br>';
}

				//$liText = Lipsum::short()->text(3);
				
				
   				$liCount = $_GET["liCount"];
		 		//return 'Lorum Ipsum Generator';
		 		return view('li.li', ['abc'=>$liCount, 'lorum'=>$paragraphs]);
			}else{
				return view('li.li', ['abc'=>'Please select number of paragraphs', 'lorum'=>'ipsum dorum sut']);
	
			}#End if/else		
				
    }#End getLiIndex()
}#End class liController extends BaseController
