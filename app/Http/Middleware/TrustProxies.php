<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
=======
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array|string|null
=======
     * @var array<int, string>|string|null
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
<<<<<<< HEAD
    // protected $headers = Request::HEADER_X_FORWARDED_ALL;
=======
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
}
