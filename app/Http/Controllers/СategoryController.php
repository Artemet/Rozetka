<?php

namespace App\Http\Controllers;

use App\Models\UsersProfile;
use Illuminate\Http\Request;

class СategoryController extends Controller
{
    public function index(){
        $data = [];
        $query = UsersProfile::get();
        foreach ($query as $item){
            $data[]=$item->first_name." ".$item->last_name;
        }
        dd($data);
    }
}
