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

            if (!empty($this->data['address']['zipcode']))  {
                if ( strlen(preg_replace('/[^0-9]/', '', $this->data['address']['zipcode'])) >= 8 ) {

                    $cep = preg_replace('/[^0-9]/', '', $this->data['address']['zipcode']);
                
                    $viaCepService = new ViaCepService();
                    $response = $viaCepService->getAddress($cep);
                
                    if ($response && $response->successful()) {
                        $address = $response;
                
                        $this->data['address']['street'] = $address['logradouro'] ?? '';
                        $this->data['address']['neighborhood'] = $address['bairro'] ?? '';
                        $this->data['address']['city'] = $address['localidade'] ?? '';
                        $this->data['address']['state'] = $address['uf'] ?? '';
                    }
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

    public function store() {
        try {
            $data = $this->data;


        } catch (\Throwable $th) {
            Log::error('failed_store_contact', [
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


    public function render()
    {
        $this->loadAddress();
        return view('livewire.contacts.create');
    }
}
