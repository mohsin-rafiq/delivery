<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Admins;
use Illuminate\Support\Facades\DB;
use Validator;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request) {

        $reules = array(
            'username' => 'required',
            'password' => 'required',
        );

        $validator = Validator::make($request->all(), $reules);
        if($validator->fails()) {
            // return $validator->errors();
            return response()->json($validator->errors(), 401);
        }

        $result = DB::table('admins')
        ->where('username', '=', $request->username)
        ->where('password', '=', sha1($request->password))
        ->first();

        // if($result) {
            return response()->json($result);
        // } else {
            // return ['message' => 'No record found'];
        // }
    }
}
