<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Image;

class UserController extends Controller
{
    public function index(Category $category, User $user, Image $image){
        return view('users.index') -> with(['posts' => $user->getByUser(),
                                            'users' => $user->get(),
                                            'images'=>$image->get()
                                            ]);
    }
}
