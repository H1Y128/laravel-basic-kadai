<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index () {
        $posts = DB::table('posts')->get();

        return view('posts/index', compact('posts'));
    }
}
