<?php

namespace App\Http\Middleware;

use App\Models\Guest as ModelsGuest;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $result = DB::select("SELECT ip FROM guests WHERE ip = :ip", [$request->ip()]);

        if (!$result) {
            ModelsGuest::create(["ip" => $request->ip()]);
        }

        return $next($request);
    }
}
