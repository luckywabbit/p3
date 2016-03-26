<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use Faker\Factory as Faker;

class userController extends BaseController
{
     /**
    * Responds to requests to /user
    */
	
	    public function getUserIndex(Request $request) {
			
			$usersGenerated = [];
			$userGenerated = [];
			
			$userCount = $request->input('userCount');
			
			if(isset($userCount)&& $userCount > 0 && $userCount <= 20  && $userCount != null){
				//echo 'Set';
				
				for ($x = 1; $x <= $userCount; $x++) {
				
				$faker = Faker::create();		
				$userName = $faker->name;
				$userEmail = $faker->email;
				$userCity = $faker->city;	
				$userMemberSince = $faker->year;

				$userGenerated = 'Name: ' . $userName . ' Email: ' .  $userEmail . ' City: ' . $userCity. ' Member Since: ' . $userMemberSince;
				array_push($usersGenerated, $userGenerated);
				}// END for loop	
				
		 		return view('user.user', [
								 'userCount'=>$userCount , 
								 'usersGenerated' => $usersGenerated
								]);

			}else{
				
					//echo 'Not Set';
							
					return redirect()->action('homeController@getHomeIndex');
					
					
			}#End if/else
			
	}#End getUserIndex()
	
}#End class userController extends BaseController
