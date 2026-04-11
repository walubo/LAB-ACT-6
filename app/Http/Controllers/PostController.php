<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($name)
    {
        $posts = [
            'How to Make French Toast',
            'Japanese Cheesecake Recipe',
            'How to Cook Steak',
            'The Best Places in Tokyo for Shokupan Bread',
            'Cambodian Style Fried Chicken Wings',
        ];

        return view('show', [
            'name' => $name,
            'posts' => $posts
        ]);
    }
}
