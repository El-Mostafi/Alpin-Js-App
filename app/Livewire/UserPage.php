<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
// #[Layout('layouts.app')]
// #[Title('User')]#pour passer la valeur Hello Youtube a la variable title et le donne a app.blade.php

class UserPage extends Component
{
    public User $user;
    
    public function render()
    {
        return view('livewire.user-page')->title('User');
    }
}
