<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formModel;

class AddUserController extends Controller
{
    public function addData(Request $request){
        $addUser = new formModel();
        $addUser->f_name        = $request->firstName;
        $addUser->l_name        = $request->lastName;
        $addUser->father_name   = $request->fatherName;
        $addUser->mother_name   = $request->motherName;
        $addUser->number        = $request->number;
        $addUser->email         = $request->email;
        $addUser->message       = $request->message;
        $addUser->save();
        return redirect()->route('readUser')->with('success', 'User Added Successfully');
    }

    public function readUser(){
        $users = formModel::all();
        return view('userList', ['users'=> $users]);
    }
    public function editUser($value){
        $editUser = formModel::where('id', $value)->first();
        dd($editUser);
        return view('EditUser', ['editUser' => $editUser]);
    }

    public function updateUser(Request $request, $id){
        $updateUser = formModel::find($id);
        $updateUser->f_name        = $request->firstName;
        $updateUser->l_name        = $request->lastName;
        $updateUser->father_name   = $request->fatherName;
        $updateUser->mother_name   = $request->motherName;
        $updateUser->number        = $request->number;
        $updateUser->email         = $request->email;
        $updateUser->message       = $request->message;
        $updateUser->update();
        return redirect()->route('readUser')->with('success', 'User Added Successfully');

    }

    public function deleteUser($dId){
        $deleteUser = formModel::where('id', $dId)->first();
        $deleteUser->delete();
        return redirect()->route('readUser');
    }
}