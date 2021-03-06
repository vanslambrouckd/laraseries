<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
        parent::boot($router);
        /*
         * indien route model binding niet werkt,
         *  moet je php artisan optimize --force uitvoeren
         *
         * ondertaande zort dat je SeriesController\show(Serie $serie) kan uitvoeren
         * ipv id door te geven
         */

        $router->model('series', 'App\Serie'); //find($id)

        //indien je iets anders dan find via id wil:
        /*
        $router->bind('articles', function($id) {
            return \App\Article::published()->findOrFail($id);
        });
        */
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
