<?php

namespace App\Http\Livewire;

use App\Events\NotifEvent;
use App\Models\Mahasiswa as ModelsMahasiswa;
use Livewire\Component;

class ScanBarcodeLiveware extends Component
{
    public $wisudwanid, $nama;
    protected $listeners = ['updateWisudawan' => 'updateWisudawan'];
    public function render()
    {
        return view('livewire.scan-barcode');
    }
    function updateWisudawan($wisudwanid)
    {
        $mhsw = ModelsMahasiswa::firstWhere('MhswID', $wisudwanid);
        if ($mhsw->Status != 'Y') {
            ModelsMahasiswa::where('id', $mhsw->id)
                ->update(['Status' => 'Y']);
            event(new NotifEvent(['message' => 'update mhsw']));
            $this->nama = $mhsw->Nama;
            $this->dispatchBrowserEvent('alert-show', ['Nama' => $mhsw->Nama]);
        }
    }
}
