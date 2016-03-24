<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Faker\Factory as Faker;

class userController extends BaseController
{
     /**
    * Responds to requests to /user
    */
	
	    public function getUserIndex() {
			
			if (isset($_GET["userCount"]) && $_GET["userCount"] > 0 ) {
   				$userCount = $_GET["userCount"];
				
				
				$faker = Faker::create();
				
				$userName = $faker->name;
				$userEmail = $faker->email;
				$userCity = $faker->city;
				$userCC = $faker->creditCardNumber;
				$userMemberSince = $faker->year;
				
				
				
		 		return view('user.user', ['abc'=>$userCount , 
								 'userName' => $userName,
								 'userEmail' => $userEmail,
								 'userCity' => $userCity,
								 'userMemberSince' => $userMemberSince,
								 'userCC' => $userCC
								 ]);
			}else{
				
				$userName = 'Undefined';
				$userEmail = 'Undefined';
				$userCity = 'Undefined';
				$userCC = 'Undefined';
				$userMemberSince = 'Undefined';
				
				
						 		return view('user.user', ['abc'=>$userCount , 
								 'userName' => $userName,
								 'userEmail' => $userEmail,
								 'userCity' => $userCity,
								 'userMemberSince' => $userMemberSince,
								 'userCC' => $userCC
								 ]);
	
			}#End if/else
    }#End getUserIndex()
	
	
	
}#End class userController extends BaseController
