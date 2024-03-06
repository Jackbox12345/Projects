<?php

namespace App\Livewire;

use App\Models\members as ModelsMembers;
use Illuminate\Support\Facades\Auth;
// use Livewire\Attributes\Rule;
use Livewire\Component;

class Members extends Component
{
    
    public $name;

   
    public $age;

    public $ids;
    
    public $gender;
    protected $rules = [
        'name' => 'required|string',
        'age' => 'required|integer',
        'gender' => 'required|in:male,female,other',
    ];

    public function mount(){
        $this->ids = Auth::id();
    }


    public function create(){
        
        $validatedData = $this->validate();
        $validatedData['user_id'] =$this->ids;
        
        try {
            ModelsMembers::create($validatedData);
            $this->reset(['name', 'age', 'gender']);
            session()->flash('success', 'Member created successfully.');
            $this->dispatch('close-modal');
    
        } catch (\Exception $e) {
            // Log or display the error message
            dd($e->getMessage());
        }
        

      
    }

    public function render()
    {
        return view('livewire.members');
    }
}
