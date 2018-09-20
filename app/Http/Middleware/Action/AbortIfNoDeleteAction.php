<?php

namespace App\Http\Middleware\Action;

use App\Exceptions\ActionException;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class AbortIfNoDeleteAction
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  Guard $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
        if (!\Auth::user()->hasAction('Delete')) {
            throw new ActionException('Tidak ada akses');
        }

        return $next($request);
    }
}
