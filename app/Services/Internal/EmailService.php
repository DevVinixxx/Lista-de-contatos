<?php

namespace App\Services\Internal;

use Illuminate\Support\Facades\Log;

class EmailService{
    public function createEmail(){
        try {
            //
        } catch (\Throwable $th) {
            Log::error('failed_create_email', [
                'error' =>$th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);
        }
    }
}