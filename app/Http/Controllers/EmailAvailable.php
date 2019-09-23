<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmailAvailable extends Controller
{
    function index()
    {
        return view('email_available');
    }

    function check(Request $request)
    {
        if($request->get('email'))
        {
            $email = $request->get('email');
            $data = DB::table('users')
                    ->where('email',$email)
                    ->count();

            if($data > 0){
                echo "not unique";
            }else{
                echo "unique";
            }
        }
    }
}
