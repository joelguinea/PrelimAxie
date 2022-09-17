<?php

namespace App\Http\Livewire\Axies;

use Livewire\Component;
use App\Models\Axie;

class Index extends Component
{

    public function loadAxies() {
        $axies = Axie::orderBy('axie_name')->get();

        return compact('axies');
    }

    public function render()
    {
        return view('livewire.axies.index', $this->loadAxies());
    }
}
