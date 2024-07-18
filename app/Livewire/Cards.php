<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\User;
class Cards extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        return view('livewire.cards',[
            'users' => User::latest()->where('name', 'like', '%' . $this->search . '%')->paginate(6)
        ]);
    }
}
