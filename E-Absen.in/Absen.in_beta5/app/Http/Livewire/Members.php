<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Member;
use App\Models\Jabatan;

class Members extends Component
{
    public $members, $member, $jabatan, $jabatans, $hak_akses, $ttd, $no_telepon, $email, $password, $alamat, $name, $member_id;
    public $isModal = 0;

    public function render()
    {
        $this->members = member::orderBy('created_at', 'ASC')->get();
        $this->jabatans = jabatan::orderBy('jabatan', 'ASC')->get();
        return view('hak_akses.admin.members');
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
        $this->name = '';
        $this->ttd = '';
        $this->jabatan = '';
        $this->no_telepon = '';
        $this->email = '';
        $this->password = '';
        $this->alamat = '';
        $this->member_id = '';
    }

    public function store()
    {

        $this->validate([
            'name' => 'required',
            'ttd' => 'required|string',
            'jabatan' => 'required|string',
            'hak_akses' => 'required|string',
            'no_telepon' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'alamat' => 'required|string',
        ]);

        if ($this->member_id == null) {
            //Anggota::insert(array('Nama_Anggota'=>$this->Nama_Anggota,'Jabatan'=>$this->Jabatan,'TTD'=>$this->TTD,'Alamat'=>$this->Alamat));
            member::create([
                'name' => $this->name,
                'ttd' => $this->ttd,
                'jabatan' => $this->jabatan,
                'hak_akses' => $this->hak_akses,
                'no_telepon' => $this->no_telepon,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'alamat' => $this->alamat,
            ]);
        } else {
            member::where('id', $this->member_id)->update(array(
                'name' => $this->name,
                'ttd' => $this->ttd,
                'jabatan' => $this->jabatan,
                'hak_akses' => $this->hak_akses,
                'no_telepon' => $this->no_telepon,
                'email' => $this->email,
                'alamat' => $this->alamat
            ));
        }

        session()->flash('message', $this->member_id != null ? $this->name . ' Berhasil Diperbaharui' : $this->name . ' Berhasil Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }


    public function delete($id)
    {
        $jabatan = member::find($id);
        $jabatan->delete();
        session()->flash('message', $jabatan->name . ' Berhasil Dihapus ');
    }



    public function edit($id)
    {

        $jabatan = member::find($id);
        $this->member_id = $id;
        $this->name = $jabatan->name;
        $this->ttd = $jabatan->ttd;
        $this->jabatan = $jabatan->jabatan;
        $this->hak_akses = $jabatan->hak_akses;
        $this->no_telepon = $jabatan->no_telepon;
        $this->email = $jabatan->email;
        $this->password = $jabatan->password;
        $this->alamat = $jabatan->alamat;
        $this->openModal();
    }
}
