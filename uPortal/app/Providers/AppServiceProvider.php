<?php

namespace App\Providers;
use App\personalRecord;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
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
        //laravel carbon if u wanto to use the data packageS
        view::composer(['home','personal_record','make_record','edit_record'], function($view){
            $view->with('auth', Auth::user());
        
        });

        view::composer(['edit_record'], function($view){

            $personalrecord = personalRecord::where('id',Auth::user()->id)->get();
            $view->with('personal_record', $personalrecord);

        
        });
    }
}
