<?php

namespace App\Services\Internal;

use Illuminate\Support\Facades\Log;

class ContactService {
    public function createContact() {
        try {

            //

        } catch (\Throwable $th) {
            Log::error('failed_create_contact', [
                'error' =>$th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);
        }
    }
}