<?php

namespace App\Http\Livewire;

use App\Models\Absen;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Absens extends Component
{
    public $tgl, $waktu, $keteranganMasuk, $keteranganPulang, $id_user, $absensi, $longlat;

    public function render()
    {
        //$this->current = new Carbon();
        //$this->current->timezone('Asia/Jakarta');
        $this->tgl = Carbon::now('Asia/Jakarta')->toDateString();
        $this->waktu = Carbon::now('Asia/Jakarta')->toTimeString();

        $this->id_user = Auth::user()->id;
        $this->keteranganMasuk = 'Masuk';
        $this->keteranganPulang = 'Pulang';


        return view('livewire.absens');
    }

    public function create()
    {

        $this->resetFields();
    }

    public function resetFields()
    {
        $this->tgl = '';
        $this->waktu = '';
        $this->id_user = '';
        $this->longlat = '';
    }

    public function masuk()
    {
        Absen::create([
            'tgl' => $this->tgl,
            'waktu' => $this->waktu,
            'keterangan' => $this->keteranganMasuk,
            'id' => $this->id_user,
            'longlat' => $this->longlat,

        ]);


        session()->flash('message', 'Anda Telah Absen ' . $this->keteranganMasuk);
    }

    public function pulang()
    {

        Absen::create([
            'tgl' => $this->tgl,
            'waktu' => $this->waktu,
            'keterangan' => $this->keteranganPulang,
            'id' => $this->id_user,

        ]);

        session()->flash('message', 'Anda Telah Absen ' . $this->keteranganPulang);
    }
}
