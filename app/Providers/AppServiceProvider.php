<?php

namespace App\Providers;

use App\contact;
use App\department;
use App\gallery;
use App\homepage;
use App\mag;
use App\static_image;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $home=homepage::find(1);
        $s_image=static_image::find(1);
        $con=contact::find(1);
        $mag_url=mag::all()->where("active",1);
        $city=gallery::all();
        return view()->share(['home'=>$home,'con'=>$con,'city'=>$city,'mag_url'=>$mag_url,'s_image'=>$s_image]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
