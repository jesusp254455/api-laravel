<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
     }
     
     public function register(Request  $request){
             $users = new User();
             $users->name = $request->name;
             $users->email = $request->email;
             $users->password = $request->password;
             $users->save();
     } 
 
     public function list_users($id){
             $users = User::find($id);
             return $users;
     }
 
     public function update(Request  $request, $id){
         $users = User::findOrFail($id);
         $users->name = $request->name;
         $users->email = $request->email;
         $users->password = $request->password;
         $users->save();
         return $users;
     }    
 
     public function delete( $id){
         $users = User::destroy($id);
         return $users;
     }
 
}
