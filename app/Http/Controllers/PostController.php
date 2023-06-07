<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(3);
        return view('welcome',['posts' => $posts]);
        // return view('web.postdetail');
    }
}
