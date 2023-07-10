<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Interfaces\IUser::class, \App\Repositories\UserRepository::class);
        $this->app->bind(\App\Interfaces\IAddress::class, \App\Repositories\AddressRepository::class);
        $this->app->bind(\App\Interfaces\ICategory::class, \App\Repositories\CategoryRepository::class);
        $this->app->bind(\App\Interfaces\IProduct::class, \App\Repositories\ProductRepository::class);
        $this->app->bind(\App\Interfaces\IDiscount::class, \App\Repositories\DiscountRepository::class);
        $this->app->bind(\App\Interfaces\ICart::class, \App\Repositories\CartRepository::class);
        $this->app->bind(\App\Interfaces\IImage::class, \App\Repositories\ImageRepository::class);
        $this->app->bind(\App\Interfaces\IReview::class, \App\Repositories\ReviewRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
