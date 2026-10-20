<?php

namespace App\Http\Middleware;

use App\Classes\Logger;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Administrador
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(!Auth::check()) {
            return redirect()->route("login");
        }
        if(Auth::user()->level !== 'Administrador'){

            //Logger
            $this->Logger->log('info', '<b class="text-danger">Tentou aceder uma página não autorizada!</b>');
            abort(403);
        }
        return $next($request);
    }
}
