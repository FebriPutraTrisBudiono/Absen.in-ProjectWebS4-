<?php

namespace App\Http\Livewire;

use App\Models\Absen;
use Livewire\Component;

class Absenku extends Component
{
    public $absen;

    public function render()
    {
        return view('livewire.absenku', [
            $this->absen = Absen::orderBy('id_absen', 'DESC')->get(),
        ]);
    }
}
