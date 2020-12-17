<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\User;
use Hash;

class Users extends Controller
{
    public function getUsers(){
        return response()->json(User::get(),200);
    }
    public function getUser($id){
        $test=User::find($id);
        if(is_null($test)){
            return response()->json(null,404);
        }
        return response()->json(User::find($id),200);
    }

    public function createUser(Request $request){
        $validate=Validator::make($request->all(), [
            'firstname' => 'max:255',
            'lastname' => 'max:255',
            'emoji' => 'max:250',
            'username' => 'max:255|unique:users',
            'lastname' => 'max:255',
            'email' => 'email|max:255|unique:users',
            'password' => 'min:6',
        ]);
        if($validate->fails()){
            return response()->json($validate->errors(),400);
        }

        $user=User::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'username'=> $request->username,
            'email'=>$request->email,
            'emoji'=>$request->emoji,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'password'=>hash::make($request->password),
            'lastLogin'=>now()]);
        return response()->json($user,201);
    }
    
    public function updateUser(Request $request,User $user){
        $user->update($request->all());
        return response()->json($user,200);
    }

    public function deleteUser(Request $request,User $user){
        $user->delete();
        return response()->json(null,204);
    }



}
