<?php

namespace App\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use App\Models\User;
class Cards extends Component
{
    use WithPagination;
    #[Url(history:true,keep:true)]
    public $search = '';

    public $selectUser;
    public function viewUser(User $user){
        $this->selectUser = $user;
        $this->dispatch('open-modal',name: 'user-info');
    }
    #[On('cards')]
    public function render()
    {
        return view('livewire.cards',[
            'users' => User::latest()->where('name', 'like', '%' . $this->search . '%')->paginate(6)
        ]);
    }
}
