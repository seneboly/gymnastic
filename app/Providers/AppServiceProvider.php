<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

use App\Post;
use App\Galery;
use App\Course;
use App\Category;
use App\Tarif;
use App\Monitor;

use Jenssegers\Date\Date;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

        View::composer(['partials/footer', 'website.index'], function($view){

            $view->with(['images'=>Galery::PublishedImages()->take(8)->get()]);
        });

        View::composer(['inc/website_elements/experts_trainers'], function($view){

            $view->with(['monitors'=>Monitor::get()]);
        });

        
         View::composer('dashboard/blog', function($view){

                    $view->with(['articles'=> Post::with('images')->get()]);
                });
        
        View::composer('inc/website_elements/pricing', function($view){

                            $view->with(['tarifs'=> Tarif::with('courses')->get()]);
                        });

         View::composer('inc/article_sidebar', function($view){

                    $view->with(['categories'=>Category::with('posts')->get()]);
                });

         View::composer(['website/index', 'inc/dashboard/programm'], function($view){

                $view->with(['courses'=>Course::with(['monitor', 'students'])->orderBy('heure_cours', 'asc')->get()]);
            });

         


         Blade::directive('datetime', function ($expression) {
            Date::setLocale('fr');
            return "<?php echo Date::parse($expression)->format('l j F H:i'); ?>";
        }); 

          Blade::directive('datesimple', function ($expression) {
            Date::setLocale('fr');
            return "<?php echo Date::parse($expression)->format('l j F'); ?>";
        }); 

         Blade::directive('heure', function ($expression) {
            Date::setLocale('fr');
            return "<?php echo Date::parse($expression)->format('H:i'); ?>";
        }); 

         Blade::directive('mois', function ($expression) {
            Date::setLocale('fr');
            return "<?php echo Date::parse($expression)->format('F'); ?>";
        });

         Date::setLocale('fr');
        
    }
}
