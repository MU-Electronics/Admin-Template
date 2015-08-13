<?php namespace MUElectronics\adminTemplate;

use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/src/resources/lang', 'manchesterTemplate');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}