<?php

namespace App\Apis\AGT;

use Illuminate\Support\Facades\Http;

class Obter
{
    private const API_URL       = 'https://sifp.minfin.gov.ao/sigt/contribuinte/instituicao/v5/obter';
    private const ORIGIN_SYSTEM = 'INFOSI_ANGOTIC';

    public function handle(string $value): mixed
    {
        $response = Http::withHeaders($this->headers())
            ->timeout(60)
            ->withOptions(['CURLOPT_CONNECTTIMEOUT' => 10])
            ->get(self::API_URL, [
                'tipoDocumento'   => 'NIF',
                'numeroDocumento' => $value,
            ]);

        if ($response->failed()) {
            $response->throw();
        }

        return $response->json('ObterContribuinte.contribuinte.denominacao') ?? 0;
    }

    private function headers(): array
    {
        return [
            'Content-Type'  => 'application/json',
            'sistemaOrigem' => self::ORIGIN_SYSTEM,
            'Authorization' => 'Basic ' . $this->credentials(),
        ];
    }

    private function credentials(): string
    {
        $username = config('services.minfin.username');
        $password = config('services.minfin.password');

        if (blank($username) || blank($password)) {
            throw new \RuntimeException('Credenciais MINFIN não configuradas.');
        }

        return base64_encode("{$username}:{$password}");
    }
}
