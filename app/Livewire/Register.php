<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public function Updated($field){
        $this->validateOnly($field,[
            'name'=> ['required','min:4'],
            'email'=> ['required','email'],
            'password'=> ['required','min:8']
        ]);
    }
    public function create(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
        $this->dispatch('close-modal');//pour ferme le modal
        $this->dispatch('cards');//pour refreche le tableau
    }
    public function render()
    {
        return view('livewire.register');
    }
}
