<?php namespace Lakshmajim\UniqueCode;

use Illuminate\Support\ServiceProvider;


/**
 * UniqueCode - ServicePrivider to support integration with Laravel framework 
 *
 * @package  UniqueCode
 * @version  1.0.0
 * @author   lakshmaji 
 */ 
class UniqueCodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['uniquecode'] = $this->app->share(function($app) {
            return new UniqueCode;
        });
    }
}
// end of UniqueCodeServiceProvider class
// end of file UniqueCodeServiceProvider.php 

