<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Anggota;
use App\Models\Jabatan;

class Anggotas extends Component
{
    public $anggotas, $Anggota, $Jabatan, $Jabatans, $TTD, $Alamat, $member_id, $Nama_Anggota;
    public $isModal = 0;

    public function render()
    {
        $this->anggotas = Anggota::orderBy('created_at', 'DESC')->get(); 
        $this->Jabatans = Jabatan::orderBy('Jabatan','ASC')->get();
        return view('livewire.anggotas'); 
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
        $this->Nama_Anggota = '';
        $this->Jabatan = '';
        $this->TTD = '';
        $this->Alamat = '';
        $this->member_id = '';
    }

    public function store()
    {
        
        $this->validate([
            'Nama_Anggota' => 'required',
            'Jabatan' => 'required|string',
            'TTD' => 'required|string',
            'Alamat' => 'required|string',
            
        ]);

        if($this->member_id==null){
            //Anggota::insert(array('Nama_Anggota'=>$this->Nama_Anggota,'Jabatan'=>$this->Jabatan,'TTD'=>$this->TTD,'Alamat'=>$this->Alamat));
            Anggota::create([
                'Nama_Anggota' => $this->Nama_Anggota,
                'Jabatan' => $this->Jabatan,
                'TTD' => $this->TTD,
                'Alamat' => $this->Alamat,
            ]);
        }else{
            Anggota::where('id',$this->member_id)->update(array('Nama_Anggota'=>$this->Nama_Anggota,'Jabatan'=>$this->Jabatan,'TTD'=>$this->TTD,'Alamat'=>$this->Alamat));
        }
        
        session()->flash('message', $this->member_id!=null ? $this->Nama_Anggota . ' Berhasil Diperbaharui': $this->Nama_Anggota . ' Berhasil Ditambahkan');
        $this->closeModal(); 
        $this->resetFields(); 
    }

    
    public function delete($id)
    {
        $jabatan = Anggota ::find($id); 
        $jabatan->delete();
        session()->flash('message', $jabatan->Nama_Anggota . ' Berhasil Dihapus ');
    }


    
    public function edit($id)
    {
        
        $jabatan = Anggota ::find($id); 
        $this->member_id = $id;
        $this->Nama_Anggota = $jabatan->Nama_Anggota;
        $this->Jabatan = $jabatan->Jabatan;
        $this->TTD = $jabatan->TTD;
        $this->Alamat = $jabatan->Alamat;
           $this->openModal(); 
    }
}