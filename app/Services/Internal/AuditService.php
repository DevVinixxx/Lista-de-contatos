<?php

namespace App\Services\Internal;

use App\Models\Audit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuditService
{
    public static function log($action, array $action_data = [])
    {
        try {
            $audit = new Audit();
            $audit->user_id = Auth::user()->id;
            $audit->action = $action;
            $audit->action_data = json_encode($action_data);
            return $audit->save();
        } catch (\Exception $e) {
            Log::error('failed_save_audit', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
        }

    }
}