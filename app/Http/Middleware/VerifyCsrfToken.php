<?php

namespace Tesis\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'update'
    ];

    public function handle($request, Closure $next)
    {
        if (
            parent::isReading($request) ||
            parent::runningUnitTests() ||
            parent::shouldPassThrough($request) ||
            parent::tokensMatch($request)
        ) {
            return parent::addCookieToResponse($request, $next($request));
        }

        return back()->with('error','The token has expired, please try again.');
    }
}
