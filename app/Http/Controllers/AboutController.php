<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    protected $now;

    public function index(Request $request)
    {
        return view('about', [
        ]);
    }
}
