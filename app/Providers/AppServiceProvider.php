<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer(['components.header.index', 'components.footer.index'], function ($view) {
            $view->with(
                'navCategories',
                Category::query()
                    ->withCount([
                        'news as published_news_count' => function ($query) {
                            $query->where('is_published', 1);
                        },
                    ])
                    ->orderByDesc('published_news_count')
                    ->orderBy('title')
                    ->limit(7)
                    ->get()
            );
        });

        Paginator::defaultView('vendor.pagination.bootstrap-4');
    }
}
