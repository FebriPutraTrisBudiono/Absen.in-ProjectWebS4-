<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class Pengaturanlainnya extends Component
{
    public $file;

    public function render()
    {
        return view('livewire.pengaturanlainnya');
    }

    public function upload()
    {

        $this->file->store('public');
        session()->flash('message', 'Upload berhasil ');
    }
}
