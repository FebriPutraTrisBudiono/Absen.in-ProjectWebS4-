<?php

namespace App\Http\Livewire;

use App\Models\Jabatan;
use App\Models\Member;
use App\Models\JamKerja;
use Livewire\Component;

class Dashboard extends Component
{
    public $members, $jabatan, $jamkerjas;

    public function render()
    {
        $this->members = Member::count();
        $this->jabatan = Jabatan::count();
        $this->jamkerjas = JamKerja::orderBy('id', 'ASC')->get();

        return view('livewire.dashboard');
    }
}
