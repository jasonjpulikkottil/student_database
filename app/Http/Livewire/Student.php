<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Countries;
use App\Models\States;
use App\Models\Students;

use Livewire\WithFileUploads;

class Student extends Component
{
    use WithFileUploads;

    public $country;
    public $state;

    public $arr=[];


    
    public $selectedCountry = [
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1,
        1,1,1,1,1,1,1,1,1,1        
    ];
    
   


public function addRow()
{


    $this->arr[] = ['name' => '','cname' => '','sname' => '','iname' => ''];



}



    public function mount()
{



    $this->country = Countries::all();
    $this->state = States::all();
    
    
    
    $this->arr = [
        ['name' => '','cname' => '','sname' => '','iname' => '']
    ];
    


}

    public function render()
    {
        return view('livewire.student');
    }
}
