<?php

namespace App\Http\Livewire\Axies;

use Livewire\Component;
use App\Models\Axie;

class Create extends Component
{
    public $axie_name, $axie_type, $price, $color;

    public function addAxie() {
        $this->validate([
            'axie_name'             =>          ['required', 'string', 'max:255'],
            'axie_type'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        Axie::create([
            'axie_name'             =>      $this->axie_name,
            'axie_type'            =>      $this->axie_type,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        return redirect('/axie')->with('axie', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.axies.create');
    }
}
