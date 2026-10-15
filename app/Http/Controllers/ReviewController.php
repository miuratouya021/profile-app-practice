<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'PHP入門',
            'price' => 2500,
            'genres' => ['技術書','プログラミング', '初心者向け']
        ];

        return view('practice.review02', $data);
    }
}
