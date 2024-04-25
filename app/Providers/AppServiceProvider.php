<?php

namespace App\Providers;

use App\Services\MailChimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(Newsletter::class, function () {
            $client = (new ApiClient())->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us18',
            ]);

            return new MailChimpNewsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function ($user) {
            return $user?->username === 'ashrafalmayah';
        });

        Blade::if('admin', function () {
            return auth()->user()->can('admin');
        });
    }
}
