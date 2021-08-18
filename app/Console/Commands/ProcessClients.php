<?php

namespace App\Console\Commands;

use App\Jobs\GetClientInvoices;
use App\Jobs\ProcessClient;
use App\Services\MongoClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ProcessClients extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clients:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process clients';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $mongoClient = MongoClient::getClient();

        $filter = [
            'status' => 1
        ];

        $clients = $mongoClient->clients->find($filter);

        foreach ($clients as $client) {
            dispatch(new GetClientInvoices($client));
        }
    }
}
