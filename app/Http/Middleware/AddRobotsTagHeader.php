<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddRobotsTagHeader
{
    /**
     * Add the crawler directives to every application response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set(
            'X-Robots-Tag',
            'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
        );

        return $response;
    }
}
