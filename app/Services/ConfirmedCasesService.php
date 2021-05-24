<?php

namespace App\Services;

use Carbon\Carbon;
use GuzzleHttp\Client;

class ConfirmedCasesService
{
    /**
     * @var client
     */
    protected $client;

    /**
     * Instantiate a new ConfirmedCasesService instance.
     *
     * @param Client $client Client
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Make Http request.
     *
     * @return mixed
     */
    private function makeHttpRequest()
    {
        $response = $this->client->request('GET', config('client.confirmed_cases_url'), [
            'curl' => [
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_MAXREDIRS      => 3,
                CURLOPT_POSTREDIR      => 3,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSLVERSION     => CURL_SSLVERSION_TLSv1_2,
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }

    /**
     * Get data table
     *
     * @return string
     */
    public function getDataTable()
    {
            $confirmedCases = $this->makeHttpRequest();
            $confirmedCases = $confirmedCases['data'];
            return datatables()->of($confirmedCases)
                               ->editColumn('a02', function ($confirmedCases) {
                                   return Carbon::parse($confirmedCases['a02'])->month;
                               })
                               ->editColumn('a05', function ($confirmedCases) {
                                   return ($confirmedCases['a05'] == 'F') ? '女' : '男';
                               })
                               ->rawColumns(['id', 'a01', 'a02', 'a03', 'a04', 'a05', 'a06', 'a07'])->toJson();
    }


}
