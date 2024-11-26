<?php

namespace App\Livewire\Contacts;

use App\Services\External\ViaCepService;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{

    use LivewireAlert;

    public $data = [];

    public function loadAddress()
    {
        try {

            if(!empty($this->data['zipcode'] && strlen(preg_replace('/[^0-9]/', '', $this->data['zipcode'])) > 7)) {
                $cep = preg_replace('/[^0-9]/', '', $this->data['zipcode']);

                $viaCepService = new ViaCepService();
                $response = $viaCepService->getAddress($cep);

                if ($response && $response->successful()) {
                    $address = $response;

                    $this->data['street'] = $address['logradouro'] ?? '';
                    $this->data['neighborhood'] = $address['bairro'] ?? '';
                    $this->data['city'] = $address['localidade'] ?? '';
                    $this->data['state'] = $address['uf'] ?? '';
                } else {
                    $this->alert('error', 'CEP não encontrado ou invalido.');
                }
            }

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
        $this->loadAddress();
        return view('livewire.contacts.create');
    }
}
