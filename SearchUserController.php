<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SearchUserController extends Controller
{
    public function showForm(){
        return view('binarySearch');
    }

    public function Search(Request $request){

     // Get All Users
     $users=User::all();
     // Convert JSON to Array
     $users_array=json_decode($users);
     // Users Number Indexes
     $users_number=count($users_array,true);
     //Get  highIndedx For get MiddleIndex
     $highIndex=$users_array[$users_number-1];
     $highIndexId=$highIndex->id;
     
     //Get  lowIndedx For get MiddleIndex
     $lowIndex=$users_array[0];
     $lowIndexId=$lowIndex->id;
     
       $data_request=User::where('name',$request->Student_Name)->first();
      
     
        while($lowIndexId <= $highIndexId){

        $MiddleIndex=$lowIndexId + $highIndexId / 2 -1;
     
        if($users_array[$MiddleIndex-1]->name == $request->Student_Name){
            return $users_array[$MiddleIndex-1]; 
        } 

        if($data_request->id > $users_array[$MiddleIndex-1]->id){
            $lowIndexId=$MiddleIndex + 1;
            
         } 

         else{
            $highIndexId=$MiddleIndex - 1;
         }  

       


         }

     }
    }