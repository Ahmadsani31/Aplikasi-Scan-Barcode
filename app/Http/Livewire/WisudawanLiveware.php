<?php

namespace App\Http\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;

class WisudawanLiveware extends Component
{
    public $mhsw;
    public  $listeners = [];

    public function mount()
    {
        // add listener specific to this task only.
        $this->listeners = ['postRefresh' => 'render'];
    }
    public function render()
    {
        $this->mhsw = Mahasiswa::orderBy('ProdiID')->get();
        return view('livewire.wisudawan');
    }
}
