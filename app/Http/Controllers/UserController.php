<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class UserController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function insertarCliente(){
        $user=new User;
        $user->id=null;
        $user->name = "daniel";
        $user->email = "daniel@gm.com";
        $user->email_verified_at=null;
        $user->password = 123;
        $user->remember_token=12345;
        $user->created_at=null;
        $user->updated_at=null;
        $user->save();
    }

    public static function obtenerClientes(){
        return User::all();
    }
}
