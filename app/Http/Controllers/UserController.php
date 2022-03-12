<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;

class UserController extends Controller
{
    public function index(Category $category, User $user){
        return view('users.index') -> with(['posts' => $user->getByUser(),
                                            'users' => $user->get()//このコードは修正
                                            ]);
    }
}
