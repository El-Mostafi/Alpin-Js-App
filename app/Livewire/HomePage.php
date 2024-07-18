<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
// #[Title('Homme')]#pour passer la valeur Hello Youtube a la variable title et le donne a app.blade.php
// #[Layout('layouts.app')]

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page')->title('Homme');
    }
}
