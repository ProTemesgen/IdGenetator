<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\People;

class Generated extends Component
{
    public $photos = [];
    public function mount(){

    }
    
    public function render()
    {
        return view('livewire.generated', [
            'peoples'    =>      People::all(),
            
        ]);
    }
}
