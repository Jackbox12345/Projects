<?php

namespace App\Livewire;


use Illuminate\Support\Facades\Auth;
use App\Models\transaction;
use Livewire\Component;
use Livewire\WithPagination;

class FinanceTable extends Component
{
    use WithPagination;

    public $ids;

    public $total = 0;
   
    public $Finsearch;


    public function mount(){
        $this->ids = Auth::id();
    }


  

    public function render()
    {
        
        $transactions = transaction::search($this->Finsearch)->paginate(5);
        $this->total = $transactions->sum('amount');
        $toptrans = Transaction::where('user_id',$this->ids)->orderBy('created_at', 'desc')->take(4)->get();
        foreach ($toptrans as $index => $transaction) {
            switch ($index) {
                case 0:
                    $transaction->color = 'light-red';
                    $transaction->icon = 'bx bx-dollar dark-red';
                    break;
                case 1:
                    $transaction->color = 'light-purple';
                    $transaction->icon = 'bx bx-list-ul dark-purple';
                    break;
                case 2:
                    $transaction->color = 'light-green';
                    $transaction->icon = 'bx bx-group dark-green';
                    break;
                case 3:
                    $transaction->color = 'light-blue';
                    $transaction->icon = 'bx bx-check dark-blue';
                    break;
                // Add more cases as needed for different indexes
            }
            
        }
        
        return view('livewire.finance-table',['data' => $transactions,'top'=>$toptrans,'total'=>$this->total]);
    }
}
