<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ClienteLista extends Component
{
    
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search='';   
    
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    
    public function render()
    {
        return view('livewire.cliente-lista',[
            // 'orders'=>Order::where('customerName','LIKE','%'.$this->search.'%')->where('user_id',Auth::id())->paginate(25),
            // 'customers'=>Customer::where('name','LIKE','%'.$this->search.'%')->paginate(20),
            'customers'=>Customer::where('name','LIKE','%'.$this->search.'%')->paginate(20),
        ]);
    }
}
