<?php

namespace App\Http\Livewire;

use App\Models\Absen;
use Livewire\Component;

class ExportPDFAbsenku extends Component
{
    public $absen;

    public function render()
    {
        return view('livewire.export_pdf_absenku', [
            $this->absen = Absen::orderBy('id', 'DESC')->get(),
        ]);
    }
}
