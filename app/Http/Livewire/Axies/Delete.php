<?php

namespace App\Http\Livewire\Axies;

use Livewire\Component;
use App\Models\Axie;
class Delete extends Component
{

    public $axieId;
    public function getAxieProperty() {
        return Axie::select('id', 'axie_name', 'axie_type', 'price', 'color')
            ->find($this->axieId);
    }

    public function delete() {
        $this->axie->delete();

        return redirect('/axie')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/axie');
    }
    public function render()
    {
        return view('livewire.axies.delete');
    }
}
