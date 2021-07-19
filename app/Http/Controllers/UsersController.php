<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index() {

        //$data = DB::select('SELECT migration FROM migrations');

        $data = ['Peter', 'Loki', 'Thor', 'Hulk'];

        return view('users', ['users' => $data]);
    }

    public function form() {

        // return redirect('profile');
        return view('form');
    }

    public function save(Request $request) {

        $request->validate([
            'username' => 'required | max:10',
            'passowrd' => 'required | min:3'
        ]);

        $data = $request->input();
        $username = $request->input('username');
        $password = $request->input('password');

        $request->session()->put('user', $data);

        return $request->input();
    }
}
