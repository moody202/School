<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
=======
        Model::unguard();
>>>>>>> 17ede32943ad6eadf9d7dc698ac5e73d6c1a7730
    }
}
