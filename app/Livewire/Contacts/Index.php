<?php

namespace App\Livewire\Contacts;

use App\Models\Contacts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Index extends Component
{

    public $contacts = [];
    public $favoritos = [];
    public $recentContacts = [];

    public function loadContacts()
    {
        try {

            $user = Auth::user();
            if (!$user) {
                return redirect()->route('login');
            }

            $contacts = Contacts::where('user_id', $user->id);
            $this->contacts = $contacts->get();

            $recentContacts = $contacts->orderBy('created_at', 'DESC')->take(3)->get();
            $this->recentContacts = $recentContacts;

        } catch (\Throwable $th) {
            Log::error('Failed_load_contacts', [
                'error' => $th->getMessage(),
                'file'  => $th->getFile(),
                'line'  => $th->getLine(),
            ]);
        }
    }

    public function mount()
    {
        $this->loadContacts();
    }

    public function render()
    {
        return view('livewire.contacts.index');
    }
}
