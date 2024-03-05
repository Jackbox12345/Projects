<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Counter extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:50')]
    public $name;
    
    public $search;

    public $EditID;
    #[Rule('required|min:3|max:50')]
    public $EditName;

    public function edit($todoId){
        $this->EditID = $todoId;
        $this->EditName = Todo::find($todoId)->name;

    }


    public function create(){
      //validate
      $validated =  $this->validateOnly('name');

      Todo::create($validated);

      $this->reset('name');

      session()->flash('success','Created.');

      $this->resetPage();


    }

    public function delete($todoId){
        Todo::find($todoId)->delete();
    }

    public function update(){
        $this->validateOnly('EditName');
        Todo::find($this->EditID)->update(['name'=> $this->EditName]);
        $this->canceledit();
    }

    public function canceledit(){
        $this->reset('EditID','EditName');

    }
    public function toogle($todoId){
    $todo = Todo::find($todoId);
    $todo->completed = !$todo->completed;
    $todo->save();
    }
 


    public function render()
    {
        //read or search


        return view('livewire.counter',['todos'=>Todo::latest()->where('name','like',"%{$this->search}%")->paginate(5)]);


    }
}
