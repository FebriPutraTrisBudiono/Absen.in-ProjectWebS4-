<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Absen;
use App\Models\Member;

class RekapAbsenAnggota extends Component
{

    public $byContinent = null;
    public $perPage = 5;
    public $orderBy = 'id';
    public $sortBy = 'desc';
    public $search;

    public $member_id, $keterangan, $name;

    public $isModal = 0;

    public function render()
    {
        return view('livewire.rekap-absen-anggota', [
            'members' => Member::orderBy('name', 'ASC')->get(),
            'absen' => Absen::when($this->byContinent, function ($query) {
                $query->where('id_user', $this->byContinent);
            })
                ->orderBy($this->orderBy, $this->sortBy)
                ->paginate($this->perPage)
        ]);
    }

    public function create()
    {

        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }


    public function resetFields()
    {
        $this->keterangan = '';
    }

    public function store()
    {

        $this->validate([
            'keterangan' => 'required|string',
        ]);

        if ($this->member_id == null) {
            //Anggota::insert(array('Nama_Anggota'=>$this->Nama_Anggota,'Jabatan'=>$this->Jabatan,'TTD'=>$this->TTD,'Alamat'=>$this->Alamat));
            Absen::create([
                'keterangan' => $this->keterangan,
            ]);
        } else {
            Absen::where('id', $this->member_id)->update(array(
                'keterangan' => $this->keterangan,
            ));
        }

        session()->flash('message', $this->member_id != null ? $this->name . ' Berhasil Diperbaharui' : $this->name . ' Berhasil Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }


    public function edit($id)
    {

        $jabatan = Absen::find($id);
        $this->member_id = $id;
        $this->keterangan = $jabatan->keterangan;
        $this->openModal();
    }
}
