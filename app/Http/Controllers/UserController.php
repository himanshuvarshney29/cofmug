<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function getUsers()
    {
        $input = ''; 
        $input = Input::all();
        if(empty($input)){
            $input = Input::json()->all();
        }
        $result =User::getData($input);
        echo "<pre>";
        print_r(User::getData($input));die;
//        return User::getData($input);

    }
}
