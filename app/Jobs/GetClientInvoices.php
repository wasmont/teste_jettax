<?php

namespace App\Jobs;

use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use MongoDB\Model\BSONDocument;

class GetClientInvoices implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $client;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(BSONDocument $client)
    {
        $this->client = $client;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        for ($i = 0; $i <= 100; $i++) {
            $xml = simplexml_load_file(public_path('/sample.xml'));
            $json = json_encode($xml);
            $array = json_decode($json,true);

            $invoiceData = $array['NFe']['infNFe'];
            $invoiceData['clientId'] = $this->client->_id;

            Invoice::create($invoiceData);
        }
    }
}
