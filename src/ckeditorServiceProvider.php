<?php
namespace Farhadnote\Ckeditor;

use Illuminate\Support\ServiceProvider;
use Form;

class CkeditorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //publish views
        $this->publishes([
            __DIR__.'/views' =>resource_path('views/vendor/ckeditor')
        ], 'ckviews');

        //publish assets
        $this->publishes([
            __DIR__.'/assets' =>public_path('vendor/ckeditor')
        ], 'ckassets');

        // Register the form component
        Form::component('ckeditor', 'vendor.ckeditor.editor', ['name', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
