<?php

namespace App\Http\Controllers\Web\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
        ];

        return view('frontend.home.index', $data);
    }
}
