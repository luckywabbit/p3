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
			
			$usersGenerated = [];
			$userGenerated = [];
			
			if (isset($_GET["userCount"]) && $_GET["userCount"] > 0 ) {
   				$userCount = $_GET["userCount"];
				
				
				
				
				
				for ($x = 1; $x <= $userCount; $x++) {
				$faker = Faker::create();
				
				$userName = $faker->name;
				$userEmail = $faker->email;
				$userCity = $faker->city;	
				$userMemberSince = $faker->year;
				
				//array_push($userGenerated, array("Name" => $userName, "Email" => $userEmail , "City" => $userCity, "Member Since" => $userMemberSince));

				//array_push($usersGenerated, $userGenerated);
				
				//$userGenString = implode(" ",$usersGenerated);	

				$userGenerated = 'Name: ' . $userName . ' Email: ' .  $userEmail . ' City: ' . $userCity. ' Member Since: ' . $userMemberSince;
				array_push($usersGenerated, $userGenerated);
}			
				
			//$users = var_dump($usersGenerated);
				//var_dump($usersGenerated);
				
		 		return view('user.user', [
								 'userCount'=>$userCount , 
								 'usersGenerated' => $usersGenerated
								
								 ]);
			}else{
				
				$userName = 'undefined';
				$userEmail = 'undefined';
				$userCity = 'undefined';
			
				$userMemberSince = 'undefined';
				
				
						 		return view('user.user', [
								 'userCount'=>$userCount , 
								 'usersGenerated' => $usersGenerated
								
								 ]);
	
			}#End if/else
    }#End getUserIndex()
	
	
	
}#End class userController extends BaseController
