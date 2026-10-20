<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Jobs\ContactJob;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {

        return view('site.contact.index');
    }

    public function send(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'reason' => 'required|string|max:255',
            'msg' => 'required|string',
        ]);


        ContactJob::dispatch($request->only([
            'name',
            'email',
            'reason',
            'subject',
            'msg'
        ]))->delay(now()->addSeconds(1));


        // Retornar para a página anterior com dados
        return redirect()->back()->with('contact', [
            'name' =>  $request->name,
        ]);
    }
}
