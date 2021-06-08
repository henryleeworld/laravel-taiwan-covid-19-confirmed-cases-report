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
    private function makeHttpRequest($url)
    {
        $response = $this->client->request('GET', $url, [
            'curl' => [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSLVERSION     => CURL_SSLVERSION_TLSv1_2,
            ],
        ]);
        return json_decode((string) $response->getBody(), true);
    }

    /**
     * Get breakdown by district data table
     *
     * @return string
     */
    public function getBreakdownByDistrictDataTable()
    {
            $confirmedCases = $this->makeHttpRequest(config('client.breakdown_of_confirmed_cases_by_district_url'));
            $confirmedCases = $confirmedCases['data'];
            return datatables()->of($confirmedCases)
                               ->editColumn('a01', function ($confirmedCases) {
                                   return Carbon::parse($confirmedCases['a01'])->format('Y-m-d');
                               })
                               ->editColumn('a04', function ($confirmedCases) {
                                   return ($confirmedCases['a04'] == 'F') ? '女' : '男';
                               })
                               ->rawColumns(['id', 'a01', 'a02', 'a03', 'a04', 'a05', 'a06'])->toJson();
    }

    /**
     * Get daily data table
     *
     * @return string
     */
    public function getDailytDataTable()
    {
            $confirmedCases = $this->makeHttpRequest(config('client.daily_confirmed_cases_url'));
            $confirmedCases = $confirmedCases['data'];
            return datatables()->of($confirmedCases)
                               ->editColumn('a01', function ($confirmedCases) {
                                   return $confirmedCases['a01'] == 'TW/Taiwan' ? '台灣' : $confirmedCases['a01'];
                               })
                               ->rawColumns(['id', 'a01', 'a02', 'a03', 'a04', 'a05', 'a06', 'a07', 'a08', 'a09', 'a10', 'a11'])->toJson();
    }
}
