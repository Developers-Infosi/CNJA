<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Speaker;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['speakers'] = Speaker::whereNotNull('priority')->orderBy('priority', 'asc')->get();

        return view('site.speaker.list.index', $response);
    }

    public function show($name)
    {
        $response['speaker'] = Speaker::where('name', urldecode($name))->first();

        return view('site.speaker.details.index', $response);
    }
}
