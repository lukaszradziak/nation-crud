<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class ClientsExport implements FromCollection, WithMapping
{
    /**
     * @var Client $client
     */
    public function map($client): array
    {
        return [
            $client->first_name,
            $client->last_name,
            $client->pesel,
            $client->email,
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Client::all();
    }
}
