<?php

namespace App\Http\Middleware;

use App\Classes\Logger;
use Closure;
use Illuminate\Http\Request;

class Convidado
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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(!auth()->check()) {
            return redirect()->route("site.login");
        }
        return $next($request);
    }
}
