<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class CategoryController extends Controller
{
    public function index(){

        return view('category.index',[
            'categories' => SpladeTable::for(Category::class)
            ->column('name',"نام دسته‌بندی",canBeHidden:false)
            ->withGlobalSearch(columns: ['name'])
            ->column('slug', sortable: true)
            ->paginate(5),
        ]);
    }
}
