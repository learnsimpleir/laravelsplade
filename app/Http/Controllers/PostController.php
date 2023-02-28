<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class PostController extends Controller
{
    public function index(){

        return view('posts.index',[
            'posts' => SpladeTable::for(Post::class)
            ->column('title',"عنوان",canBeHidden: false)
            ->withGlobalSearch(columns: ['title'])
            ->column('slug', sortable: true)
            ->paginate(5),
        ]);
    }
}
