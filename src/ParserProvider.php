<?php

namespace MrFail\HtmlParser;

use Illuminate\Support\ServiceProvider;

class ParserProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/config/html-parser.php' => config_path('html-parser.php'),
        ], 'spine');

        // Merge config
        $this->mergeConfigFrom(__DIR__ . '/config/html-parser.php', 'html-parser');
    }
}
