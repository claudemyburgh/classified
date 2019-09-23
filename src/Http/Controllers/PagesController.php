<?php

namespace DesignByCode\Classified\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('classified::welcome');
    }
}
