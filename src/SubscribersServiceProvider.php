<?php
namespace AkshayJumbade\Subscriber;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use AkshayJumbade\Subscriber\Core\Livewire\SubscriptionForm;

class SubscribersServiceProvider extends ServiceProvider {
   function boot() {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
      $this->loadViewsFrom(__DIR__.'/views', 'subscriber');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');
      // publishes
      Livewire::component('subscription-form', SubscriptionForm::class);
      $this->publishes([
         __DIR__.'/database/migrations' => database_path('migrations'),
      ], 'subscriber');

      $this->publishes([
         __DIR__.'/views' => resource_path('views'),
      ], 'subscriber-views');

      $this->publishes([
         __DIR__.'/database/migrations' => database_path('migrations'),
      ], 'subscriber-db');
   }
   function register() {

   }
}
