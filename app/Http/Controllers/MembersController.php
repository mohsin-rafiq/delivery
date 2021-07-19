<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    //For API
    public function list($id = NULL) {

        if($id == NULL) {
            return Member::all(); // to fetch all records
        } else {
            return Member::find($id); // to fetch 1 record
        }
    }

    public function index() {

        //$data = Member::all(); // to fetch all records
        $data = Member::paginate(2);

        return view('members/list', ['members' => $data]);
    }

    public function new() {

        return view('members/new');
    }

    public function save(Request $request) {

        $request->validate([
            'full_name' => 'required | min:3',
            'email_address' => 'required | email'
        ]);

        $member = new Member;
        $member->full_name = $request->full_name;
        $member->email_address = $request->email_address;

        $member->save();

        return redirect('members/list');
    }

    public function delete($id) {

        $data = Member::find($id);
        $data->delete();

        return redirect('members/list');
    }

    public function edit($id) {

        $data = Member::find($id);

        return view('members/edit', ['member' => $data]);
    }

    public function update(Request $request) {

        $request->validate([
            'full_name' => 'required | min:3',
            'email_address' => 'required | email'
        ]);

        $member = Member::find($request->id);
        $member->full_name = $request->full_name;
        $member->email_address = $request->email_address;

        $member->save();

        return redirect('members/list');
    }
}
