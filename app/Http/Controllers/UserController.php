<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    //
    
    public function show(User $user){
         return view('user',compact('user')); 
    }

    public function index(){
        $users = User::all();
        return view('index',compact('users'));
    }

    public function edit($id){
        try{
            $user= User::findOrFail($id);
            return view('userEdit', compact('user'));
            

        }catch(\Exception $ex){
            return $ex->getMessage();
        }
        
    }
}
