<?php

namespace App\Http\Livewire\Axies;

use Livewire\Component;
use App\Models\Axie;
use App\Events\UserLog;
class Delete extends Component
{

    public $axieId;
    public function getAxieProperty() {
        return Axie::select('id', 'axie_name', 'axie_type', 'price', 'color')
            ->find($this->axieId);
    }

    public function delete() {
        $this->axie->delete();

        $log_entry = 'Delete Axie: "' .$this->axie->axie_name . '" with an ID: '. $this->axie->id;
        event(new UserLog($log_entry));

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
