<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Participant;
use App\Apis\Minfin\ObterDC;

class CheckRupePayments extends Command
{
    protected $signature = 'rupe:check-payments';
    protected $description = 'Verifica pagamentos RUPE';

    public function handle()
    {
        $api = new ObterDC();

        $participants = Participant::where('payment_status', 'E')
            ->whereNotNull('code')
            ->where('created_at', '>=', now())
            ->get();

        foreach ($participants as $participant) {

            if ($participant->expires_at && now()->greaterThan($participant->expires_at)) {

                $participant->update([
                    'payment_status' => 'EXPIRADO'
                ]);

                $this->warn("Expirado: {$participant->code}");
                continue;
            }

            $response = $api->index($participant->code);

            if (!$response || !is_array($response)) {
                continue;
            }

            if (isset($response['estado']) && $response['estado'] == 'P') {

                $participant->update([
                    'payment_status' => 'PAGO',
                    'paid_at' => now()
                ]);

                $this->info("Pago: {$participant->code}");
            }
        }

        return 0;
    }
}
