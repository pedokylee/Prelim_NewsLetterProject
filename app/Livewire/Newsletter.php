<?php

namespace App\Livewire;

use Livewire\Component;

class Newsletter extends Component
{
    public $name = '';
    public $email = '';
    public $successMessage = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function subscribe()
    {
        $this->validate();

        $this->reset(['name', 'email']);
        $this->successMessage = 'You have successfully subscribed!';
    }

    public function render()
    {
        return view('livewire.newsletter');
    }
}