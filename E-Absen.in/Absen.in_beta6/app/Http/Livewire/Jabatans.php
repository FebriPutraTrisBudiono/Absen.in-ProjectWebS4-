<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Jabatan;

class Jabatans extends Component
{
    public $jabatans, $jabatan, $member_id;
    public $isModal = 0;


    public function render()
    {
        $this->jabatans = jabatan::orderBy('created_at', 'DESC')->get();
        return view('hak_akses.admin.jabatans');
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
        $this->jabatan = '';
        $this->member_id = '';
    }

    public function store()
    {

        $this->validate([
            'jabatan' => 'required|string',

        ]);

        if ($this->member_id == null) {
            jabatan::insert(array('jabatan' => $this->jabatan));
        } else {
            jabatan::where('id', $this->member_id)->update(array('jabatan' => $this->jabatan));
        }

        session()->flash('message', $this->member_id != null ? $this->jabatan . ' Berhasil Diperbarui' : $this->jabatan . ' Berhasil Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }


    public function delete($id)
    {
        $jabatan = jabatan::find($id);
        $jabatan->delete();
        session()->flash('message', $jabatan->jabatan . ' Berhasil Dihapus ');
    }

    public function edit($id)
    {

        $jabatan = jabatan::find($id);
        $this->member_id = $id;
        $this->jabatan = $jabatan->jabatan;
        $this->openModal();
    }
}
