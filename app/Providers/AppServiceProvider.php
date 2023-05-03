<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Paginator::useBootstrap();

        view()->composer('layouts.site', function($view){
            $categories = \App\Models\Category::all();
            $ad = \App\Models\Ad::first();
            // $response = Http::get('https://coronavirus-19-api.herokuapp.com/countries/uzbekistan');
            // $responseData = $response->json();

            // $response2 = Http::get("https://cbu.uz/ru/arkhiv-kursov-valyut/json/");
            // $response2 = $response2->json();
            // $kursData['usd'] = $response2[0]['Rate'];
            // $kursData['euro'] = $response2[1]['Rate'];
            // $kursData['rub'] = $response2[2]['Rate'];

        $view->with(compact('categories', 'ad'/*, 'responseData', 'kursData'*/));
        });

        view()->composer('sections.popularPosts', function($view){

            $popularPosts = \App\Models\Post::limit(4)->orderBy('view', 'DESC')->get();
            $ad = \App\Models\Ad::first();
            $view->with(compact('popularPosts', 'ad'));
        });

    }
}
