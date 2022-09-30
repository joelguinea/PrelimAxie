<?php

namespace App\Http\Livewire\Axies;

use Livewire\Component;
use App\Models\Axie;
use Livewire\WithPagination;

class Index extends Component
{   

    public $search, $color = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadAxies() 
    {
        $query = Axie::orderBy('axie_name')
        ->search($this->search);

        if ($this->color != 'all') {
           $query->where('color', $this->color);
        }

        $axies = $query->paginate(2);


        return compact('axies');
    }

    public function render()
    {
        return view('livewire.axies.index', $this->loadAxies());
    }
}
