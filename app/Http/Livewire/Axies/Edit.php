<?php

namespace App\Http\Livewire\Axies;
use App\Models\Axie;
use App\Events\UserLog;
use Livewire\Component;

class Edit extends Component
{

    public $axieId;
    public $axie_name, $axie_type, $price, $color;
    public function mount() {
        $this->axie_name = $this->axie->axie_name;
        $this->axie_type = $this->axie->axie_type;
        $this->price = $this->axie->price;
        $this->color = $this->axie->color;

    }

    public function editAxie() {
        $this->validate([
            'axie_name'             =>          ['required', 'string', 'max:255'],
            'axie_type'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->axie->update([
            'axie_name'             =>      $this->axie_name,
            'axie_type'            =>      $this->axie_type,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);
        $log_entry = 'Update Axie:"' .$this->axie->axie_name . '"with an ID: '. $this->axie->id;
        event(new UserLog($log_entry));

        return redirect('/axie')->with('axie', 'Updated Successfully');
    }

    public function back() {
        return redirect('/axie');
    }
    public function getAxieProperty() {
        return Axie::find($this->axieId);
    }

    public function render()
    {
        return view('livewire.axies.edit');
    }
}
