<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JamKerja;

class JamKerjas extends Component
{
    public $jamkerjas, $jamkerja, $start, $finish, $keterangan, $member_id;
    public $isModal = 0;

    public function render()
    {
        $this->jamkerjas = jamkerja::orderBy('id', 'ASC')->get(); 
        return view('hak_akses.admin.jam-kerjas');
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
        $this->start = '';
        $this->finish = '';
        $this->keterangan = '';
        $this->member_id = '';
    }

    public function store()
    {
        
        $this->validate([
            'start' => 'required|string',
            'finish' => 'required|string',
            'keterangan' => 'required|string',
            
        ]);

        if($this->member_id==null){
            jamkerja::create([
                'start' => $this->start,
                'finish' => $this->finish,
                'keterangan' => $this->keterangan,
            ]);
        }else{
            jamkerja::where('id',$this->member_id)->update(array(
                'start'=>$this->start,
                'finish'=>$this->finish,
                'keterangan'=>$this->keterangan));
        }
        
        session()->flash('message', $this->member_id!=null ?'Jam ' . $this->keterangan . ' Berhasil Diperbaharui': 'Jam ' . $this->keterangan . ' Berhasil Ditambahkan');
        $this->closeModal(); 
        $this->resetFields(); 
    }


    
    public function edit($id)
    {
        
        $jamkerja = jamkerja ::find($id); 
        $this->member_id = $id;
        $this->start = $jamkerja->start;
        $this->finish = $jamkerja->finish;
        $this->keterangan = $jamkerja->keterangan;
           $this->openModal(); 
    }
}
