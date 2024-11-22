<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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
        return view(view:'users.form', data: [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new user',
                'method' => 'post',
                'url' => route('users.store'),
                'submit_text' => 'Create'
            ],
        ]);
    }

    public function store(UserRequest $request)
    {


        User::create($request->validated());

        return to_route('users.index');

    }

    public function show(User $user)
    {
        
        return view(view:'users/show', data:[
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view(view:'users.form', data:[
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit user:' . $user->name ,
                'method' => 'put',
                'url' => route('users.update', $user),
                'submit_text' => 'Update'
            ],
        ]);
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update(attributes: $request->validated());

        return to_route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        // return redirect(route('users.index'));

        return to_route('users.index');
    }

}
