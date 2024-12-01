<?php

namespace App\Services\Internal;

use App\Models\Contacts;
use Illuminate\Support\Facades\Log;

use function PHPUnit\Framework\isEmpty;

class ContactService {


    public function createContact($contactData) {
        try {

            $contact = new Contacts;
            $contact->name = $data['contact']['name'] ?? null;
            $contact->surname = $data['contact']['surname'] ?? null;
            $contact->company = $data['contact']['company'] ?? null;
            $contact->birthdate = $data['contact']['birthdate'] ?? null;
            $contact->address = json_decode($data['address']) ?? null;
            $contact->user_id = auth()->user()->id;

            if ($contact->save()) {

                if (!empty($data['phone'])) {
                    $numberService = new NumberService();
                    $response = $numberService->createNumber();
                    if ($response) {
                        Log::info("success_save_number_contactID_" . $contact->id);
                    } else {
                        Log::error('error', "failed_save_number", [
                            'contactID' => $contact->id,
                        ]);
                    }
                }

                if(!empty($data['emails'])) {
                    $emailService = new EmailService();
                    $response =  $emailService->createEmail();
                }
            }

            return true;
            
        } catch (\Throwable $th) {
            Log::error('failed_create_contact', [
                'error' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);

            return false;
        }
    }

    public function newContact(?array $data) {

        try {
            // lembre-se de fazer toda a tratativa de receber os valores
            // e apos a tratativa, chame a função de criar o contato

            $response = $this->createContact($data);

            

        } catch ( \Throwable $th) {
            Log::error('failed_process_new_contact', [
                'error' => $th->getMessage(),
                'line'  => $th->getLine(),
                'file'  => $th->getFile(),
            ]);
        }

    }

}