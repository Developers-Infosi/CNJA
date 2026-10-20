<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Speaker;

class HomeController extends Controller
{
    public function index()
    {


        $response['speakers'] = Speaker::whereNotNull('priority')->orderBy('priority', 'asc')->limit(16)->get();
        return view('site.home.index', $response);
    }
}
