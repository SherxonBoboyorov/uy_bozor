<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function list($id)
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('front.categorys.list', compact(
            'categories',
            'id'
        ));
    }
}
