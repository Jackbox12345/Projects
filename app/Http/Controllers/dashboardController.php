<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\transaction;
use Livewire\WithPagination;

class dashboardController extends Controller
{
    use WithPagination;
    
    public function index(){
        // $ids = Auth::user()->id;
     
        // $result=transaction::where('user_id',$ids)->paginate(5);
    
        return view('dashboard.index');
    }
    public function membersindex(){
        return view('dashboard.member');
    }

    public function profileIndex(){
        return view('dashboard.profile');
    }
    public function todoview(){
        return view('dashboard.todo');
    }

}
