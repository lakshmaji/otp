<?php 

// Define namespace
namespace Lakshmajim\UniqueCode;

// Inlcude namespace
use Illuminate\Support\ServiceProvider;


/**
 * UniqueCode - ServicePrivider to support integration with Laravel framework 
 *
 * @package  UniqueCode
 * @version  1.0.1
 * @since    Class available since Release 1.0.0
 * @author   lakshmaji 
 */ 
class UniqueCodeServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return   void
     * @package  UniqueCode
     * @version  1.0.1
     * @since    Method available since Release 1.0.0
     * @author   lakshmaji 
     */
    public function boot()
    {
        //
    }

    // ------------------------------------------------------------------------


    /**
     * Register the application services.
     *
     * @return   void
     * @package  UniqueCode
     * @version  1.0.1
     * @since    Method available since Release 1.0.0
     * @author   lakshmaji 
     */
    public function register()
    {
        if (method_exists(\Illuminate\Foundation\Application::class, 'singleton')) {
            $this->app->singleton('uniquecode', function($app) {
                return new UniqueCode;
            });
        } else {
            $this->app['uniquecode'] = $this->app->share(function($app) {
                return new UniqueCode;
            });
        }
    }

    // ------------------------------------------------------------------------

}
// end of UniqueCodeServiceProvider class
// end of file UniqueCodeServiceProvider.php 

