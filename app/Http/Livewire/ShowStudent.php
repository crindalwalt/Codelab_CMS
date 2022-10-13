<?php

namespace App\Http\Livewire;

use App\Enum\UserRoles;
use App\Models\User;
use Livewire\Component;

class ShowStudent extends Component
{
    public $stdsearch ;
    public $users;
    public function render()
    {
        $stdsearch = '%' . $this->stdsearch  . '%';
        $this->users = User::where('role',UserRoles::STUDENT->value)->where('name','like',$stdsearch)->latest()->get();
        return view('livewire.show-student');
    }
}
