<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

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
        //  força embaralhamento do token de autorização
        // cuidado pois o token só pode ser visto na criação do cliente, depois nunca mais
        //Passport::hashClientSecrets();


    }
}
