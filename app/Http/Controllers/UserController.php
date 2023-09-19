<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;
    public $timestamps = false;
    public function __construct()
    {
        $this->user = new User();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->all();
        return view('users',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->user->create($request->except([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'password'=> 'password_hash($request->password,PASSWORD_DEFAULT)',
        ]));

        if($created){
            return redirect()->back()->with('message','User created');
        }
        return redirect()->back()->with('message','User not created');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
       return view('users_show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
       return view('users_edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->user->where('id',$id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->back()->with('message','User updated');
        }
        return redirect()->back()->with('message','User not updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->user->where('id',$id)->delete();
        return redirect()->route('users.index');
    }
}
