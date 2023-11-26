<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SimpleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //abort(403, "Entry restricted");
       
        return $next($request);

        // print_r($request);exit;

        // $response  = $next($request);
        // $currentContent = $response->getContent();
        // $newContent = $currentContent . " -adding content";
        // $response->setContent($newContent);

        // return $response;
    }
}
