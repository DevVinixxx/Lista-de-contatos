<?php

namespace App\Livewire\Contacts;

use App\Services\External\ViaCepService;
use App\Services\Internal\ContactService;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;

    public $contact = [];
    public $phone = [];
    public $emails = [];
    public $address = [];


    public function loadAddress()
    {
        try {

            if (!empty($this->address['zipcode']))  {
                if ( strlen(preg_replace('/[^0-9]/', '', $this->address['zipcode'])) >= 8 ) {

                    $cep = preg_replace('/[^0-9]/', '', $this->address['zipcode']);
                
                    $viaCepService = new ViaCepService();
                    $response = $viaCepService->getAddress($cep);
                
                    if ($response && $response->successful()) {
                        $address = $response;
                
                        $this->address['street'] = $address['logradouro'] ?? '';
                        $this->address['neighborhood'] = $address['bairro'] ?? '';
                        $this->address['city'] = $address['localidade'] ?? '';
                        $this->address['state'] = $address['uf'] ?? '';
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

        // $this->validate();

        try {
            $data = [
                'contact' => $this->contact ?? [],
                'phone' => $this->phone ?? [],
                'emails' => $this->emails ?? [],
                'address' => $this->address ?? [],
            ];

            $contactService = new ContactService;
            $response = $contactService->newContact($data);

            if ($response) {
                dd($data, $response);
                $this->alert('success', 'Contato criado com sucesso!');
                return redirect()->route('contacts.index');
            } else {
                return $this->alert('error', 'Erro ao criar contato!');
            }

        } catch (\Throwable $th) {
            Log::error('failed_store_contact', [
                'error' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);
        }
    }

    public function render()
    {
        $this->loadAddress();
        return view('livewire.contacts.create');
    }
}
