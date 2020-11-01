<?php
use AkshayJumbade\Subscriber\Core\Controllers\SubscriptionController;

Route::group([ 'prefix' => 'subscribers', 'middleware' => ['web', 'auth'] ], function() {
   Route::post('/', [SubscriptionController::class, 'saveSubscriber']);
});
