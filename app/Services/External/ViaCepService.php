<?php

namespace App\Services\External;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ViaCepService {

    public function getAddress($cep)
    {
        try {

            $response = Http::get("viacep.com.br/ws/$cep/json/");
    
            if ($response->successful()) {
                return $response;
            } else {
                Log::error('failed_api_VIACEP', [
                    'status_code' => $response->status(),
                    'response' => $response->body(),
                ]);
                
                return null;
            }

        } catch (\Throwable $th) {
            Log::emergency('emergency_error_to_api_viacep', [
                'error' => $th->getMessage(),
                'file'  => $th->getFile(),
                'line'  => $th->getLine(),
            ]);
        }
    }

}
