<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();



        return view( view: 'users.index', data: [
            'users'=> $users,
        ]);
    }

    public function create()
    {
        return view(view:'users.create');
    }

    public function store(Request $request)
    {


        User::create($request->validate(rules: [
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]));

        return redirect(to:'/users');

    }

    public function show(User $user)
    {
        
        return view(view:'users/show', data:[
            'user' => $user
        ]);
    }
}
