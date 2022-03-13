<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;

class CategoryController extends Controller
{
    public function index(Category $category, User $user){
        return view('categories.index') -> with(['posts' => $category->getByCategory(),
                                                'users' => $user->get()
                                                ]);
    }
}