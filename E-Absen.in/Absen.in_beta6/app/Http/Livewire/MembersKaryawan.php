<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Member;
use App\Models\Jabatan;

class MembersKaryawan extends Component
{
    public $members, $member, $jabatan, $jabatans, $hak_akses, $ttd, $no_telepon, $email, $password, $alamat, $name, $member_id;
    public $isModal = 0;

    public function render()
    {
        $this->members = member::orderBy('created_at', 'ASC')->get(); 
        $this->jabatans = jabatan::orderBy('jabatan','ASC')->get();
        return view('hak_akses.karyawan.members-karyawan');
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

    
    public function show($id)
    {
        
        $jabatan = member ::find($id); 
        $this->member_id = $id;
        $this->name = $jabatan->name;
        $this->ttd = $jabatan->ttd;
        $this->jabatan = $jabatan->jabatan;
        $this->hak_akses = $jabatan->hak_akses;
        $this->no_telepon = $jabatan->no_telepon;
        $this->email = $jabatan->email;
        $this->password = $jabatan->password;
        $this->alamat = $jabatan->alamat;
        $this->alamat = $jabatan->alamat;
           $this->openModal(); 
    }
}
