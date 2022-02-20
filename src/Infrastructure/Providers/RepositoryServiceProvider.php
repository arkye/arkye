<?php

namespace App\Infrastructure\Providers;

use App\Domain\Repositories\UserRepository;
use App\Infrastructure\Repositories\UserEloquentRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->app->singleton(UserRepository::class, fn() => new UserEloquentRepository());
  }
}
