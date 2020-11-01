<?php

namespace AkshayJumbade\Subscriber\Core\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SubscriptionForm extends Component
{
   public $formCompleted = false;
   public $subscriptionEmail = '';


   public function save()
   {
      $this->resetErrorBag();
      $this->formCompleted = true;
      $this->emit('saved');
   }

   public function render()
   {
      if(view()->exists('components.subscription-form')) {
         return view('components.subscription-form');
      }
      return view('subscriber::components.subscription-form');
   }
}
