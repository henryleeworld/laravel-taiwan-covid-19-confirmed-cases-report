<?php

namespace App\Http\Integrations\Covid19;

use GuzzleHttp\Client;
use Illuminate\Support\Carbon;

class Covid19Connector
{
    /**
     * Instantiate a new Covid19Connector instance.
     */
    public function __construct(protected Client $client)
    {
    }

    /**
     * Make Http request.
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
     */
    public function getBreakdownByDistrictDataTable(): string
    {
            $confirmedCases = $this->makeHttpRequest(config('services.covid_19.url.breakdown_of_confirmed_cases_by_district'));
            $confirmedCases = $confirmedCases['data'];
            return datatables()->of($confirmedCases)
                               ->editColumn('a01', function ($confirmedCases) {
                                   return Carbon::parse($confirmedCases['a01'])->format('Y-m-d');
                               })
                               ->rawColumns(['id', 'a01', 'a02', 'a03', 'a04', 'a05'])->toJson();
    }

    /**
     * Get breakdown by age data table
     */
    public function getBreakdownByAgeDataTable(): string
    {
            $confirmedCases = $this->makeHttpRequest(config('services.covid_19.url.breakdown_of_confirmed_cases_by_age'));
            $confirmedCases = $confirmedCases['data'];
            return datatables()->of($confirmedCases)
                               ->editColumn('a01', function ($confirmedCases) {
                                   return Carbon::parse($confirmedCases['a01'])->format('Y-m-d');
                               })
                               ->rawColumns(['id', 'a01', 'a02', 'a03', 'a04', 'a05'])->toJson();
    }

    /**
     * Get death data table
     */
    public function getDeathDataTable(): string
    {
            $confirmedCases = $this->makeHttpRequest(config('services.covid_19.url.deaths'));
            $confirmedCases = $confirmedCases['data'];
            return datatables()->of($confirmedCases)
                               ->editColumn('a01', function ($confirmedCases) {
                                   return Carbon::parse($confirmedCases['a01'])->format('Y-m-d');
                               })
                               ->rawColumns(['id', 'a01', 'a02', 'a03', 'a04', 'a05', 'a06'])->toJson();
    }
}
