<?php

namespace App\Http\Livewire;
use App\Models\Absen;

use Livewire\Component;

class Absens extends Component
{
    public $jamkerjas, $jamkerja, $start, $finish, $keterangan, $member_id;
    public $isModal = 0;

    public function render()
    {
        return view('livewire.absens');
    }

    
}
