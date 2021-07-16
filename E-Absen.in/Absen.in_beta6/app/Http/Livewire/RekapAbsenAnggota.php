<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Absen;
use App\Models\Member;

class RekapAbsenAnggota extends Component
{

    public $byContinent = null;
    public $perPage = 5;
    public $orderBy = 'tgl';
    public $sortBy = 'desc';
    public $search;

    public function render()
    {
        return view('livewire.rekap-absen-anggota', [
            'members' => Member::orderBy('name', 'ASC')->get(),
            'absen' => Absen::when($this->byContinent, function ($query) {
                $query->where('id', $this->byContinent);
            })
                ->orderBy($this->orderBy, $this->sortBy)
                ->paginate($this->perPage)
        ]);
    }
}
