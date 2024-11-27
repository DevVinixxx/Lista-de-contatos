<?php

namespace App\Services\Internal;

use Illuminate\Support\Facades\Log;

class NumberService {

    public function createNumber() {
        try {
            //
        } catch (\Throwable $th) {
            Log::error('failed_create_number', [
                'error' =>$th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);
        }
    }
}