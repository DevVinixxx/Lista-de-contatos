<?php

namespace App\Livewire\Contacts;

use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{

    use LivewireAlert;

    public $data = [];

    public function loadCep()
    {
        try {

        } catch (\Throwable $th ) {
            Log::error('failed_load_cep_mothod', [
                'error' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);
        }
    }

    public function alertA()
    {
        dd($this->data);
        return $this->alert('success', 'flesh message success');
    }

    public function mount()
    {
        //
    }

    public function render()
    {
        $this->loadCep();
        return view('livewire.contacts.create');
    }
}
