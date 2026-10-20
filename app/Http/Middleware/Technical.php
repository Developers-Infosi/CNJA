<?php

namespace App\Http\Middleware;

use App\Classes\Logger;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Technical
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
        if(Auth::user()->level != 'Técnico' && Auth::user()->level != 'Administrador'){
             //Logger
             $this->Logger->log('info', '<b class="text-danger">Tentou aceder uma página não autorizada!</b>');
            return redirect()->route('site.painel')->with('NoAuth', 'Acesso negado. Não possui permissões suficientes para realizar esta ação.');
        }
        return $next($request);
    }
}
