<?php

namespace App\Providers;

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
        //Comic
        $this->app->bind(
            \App\Repositories\Comic\ComicRepositoryInterface::class,
            \App\Repositories\Comic\ComicRepository::class
        );

        //Chapter
        $this->app->bind(
            \App\Repositories\Chapter\ChapterRepositoryInterface::class,
            \App\Repositories\Chapter\ChapterRepository::class
        );
    }
}
