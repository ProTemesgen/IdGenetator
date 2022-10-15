<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\People;
use Livewire\WithFileUploads;

class FormController extends Component
{
    use WithFileUploads;


    public $photo;
    public $Fname;
    public $Mname;
    public $Lname;
    public $phone;
    public $city;
    public $subCity;
    public $woreda;
    public $houseNo;
    public $role;

    public $photoPath;



    protected $validatedData = [

        'photo'                 =>          'required|file',
        'Fname'                 =>          'required',
        'Mname'                 =>          'required',
        'Lname'                 =>          'required',
        'phone'                 =>          'required',
        'city'                  =>          'required',
        'subCity'               =>          'required',
        'woreda'                =>          'required',
        'houseNo'               =>          'required',
        'role'                  =>          'required',
    ];


    public function generate(){


        $photoName = time(). '-' . $this->Fname . '-' . $this->Lname . '.' . $this->photo->extension();

        $this->photoPath = $this->photo->storeAs('data/person/photo', $photoName, 'public');


        $newPerson = $this->validate($this->validatedData);


        $newPerson['photo'] = $this->photoPath;

        

        People::create($newPerson);

        $this->Fname         = '';
        $this->Lname         = '';
        $this->Mname         = '';
        $this->phone         = '';
        $this->city          = '';
        $this->subCity       = '';
        $this->woreda        = '';
        $this->houseNo       = '';
        $this->role          = '';
    }


    public function render()
    {
        return view('livewire.form', [
        ]);
    }
}
