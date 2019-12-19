<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use App\Models\Pages;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    protected $panelNamespace = 'App\Http\Controllers\Panel';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        Route::model('page', Pages::class);
        Route::model('news', News::class);
        Route::model('category', Category::class);
        Route::model('product', Product::class);
        Route::bind('product_slug', function ($value) {
            return Product::where('slug', $value)->active()->first() ?? abort(404);
        });
        Route::bind('category_slug', function ($value) {
            return Category::where('slug', $value)->active()->first() ?? abort(404);
        });
        Route::bind('parent_slug', function ($value) {
            return Category::where('slug', $value)->active()->first() ?? abort(404);
        });

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapPanelRoutes();
        $this->mapFrontRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */

    protected function mapPanelRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->prefix('panel')
            ->group(base_path('routes/panel.php'));
    }

    protected function mapFrontRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/front.php'));
    }
}
