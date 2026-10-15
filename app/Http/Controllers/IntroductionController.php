<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index()
    {
        $data = [
            'name' => '田中一郎',
            'age' => 28,
            'hobbies' => ['ゲーム','映画','スポーツ']
        ];

        return view('introduction', $data);
    }
}
