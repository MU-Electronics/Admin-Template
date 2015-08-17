<?php namespace MUElectronics\adminTemplate\app\Providers;

use Illuminate\Support\ServiceProvider;


class AdminTemplate extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishLang();
        $this->publishPublic();
        $this->publishViews();
        $this->publishConfig();
    }

    /**
     * Publish package lang files
     */
    public function publishLang()
    {
        $this->loadTranslationsFrom(__DIR__.'/src/resources/lang', 'manchesterTemplate');
    }

    /**
     * Publish package views files
     *
     * @return void
     */
    private function publishViews()
    {
        $this->loadViewsFrom(__DIR__.'/src/resources/views', 'manchesterTemplate');

        $this->publishes([
            __DIR__.'/../../../src/resources/views/login.blade.php' => base_path('resources/views/vendor/manchesterTemplate/login.blade.php'),
            __DIR__.'/../../../src/resources/views/template.blade.php' => base_path('resources/views/vendor/manchesterTemplate/template.blade.php'),
            __DIR__.'/../../../src/resources/views/partials' => base_path('resources/views/vendor/manchesterTemplate/partials'),
            __DIR__.'/../../../src/resources/views/errors' => base_path('resources/views/vendor/manchesterTemplate/errors'),
        ]);
    }

    /**
     * Publish public resource assets
     *
     * @return void
     */
    private function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../../../src/config/admintemplate.php' => config_path('admintemplate.php'),
        ]);
    }

    /**
     * Publish public resource assets
     *
     * @return void
     */
    private function publishPublic()
    {
        $this->publishes([
            __DIR__.'/../../../src/public/css' => public_path('vendor/manchesterTemplate/css'),
            __DIR__.'/../../../src/public/fonts' => public_path('vendor/manchesterTemplate/fonts'),
            __DIR__.'/../../../src/public/images' => public_path('vendor/manchesterTemplate/images'),
            __DIR__.'/../../../src/public/js' => public_path('vendor/manchesterTemplate/js'),
        ], 'public');
    }

}