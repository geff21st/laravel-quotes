<?php


namespace Geffest\Quotes;


use Illuminate\Support\ServiceProvider;

class QuotesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'quotes');
    }
}
