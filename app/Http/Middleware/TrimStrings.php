<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    /**
     * The names of the attributes that should not be trimmed.
     *
<<<<<<< HEAD
     * @var array
     */
    protected $except = [
=======
     * @var array<int, string>
     */
    protected $except = [
        'current_password',
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
        'password',
        'password_confirmation',
    ];
}
