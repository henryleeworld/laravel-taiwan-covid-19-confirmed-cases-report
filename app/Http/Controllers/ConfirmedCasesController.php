<?php

namespace App\Http\Controllers;

use App\Services\ConfirmedCasesService;
use Illuminate\Http\Request;

class ConfirmedCasesController extends Controller
{

    private $confirmedCasesService;

    /**
     * Instantiate a new ConfirmedCasesReportController instance.
     *
     * @param ConfirmedCasesService $confirmedCasesService Confirmed cases service
     *
     * @return void
     */
    public function __construct(ConfirmedCasesService $confirmedCasesService)
    {
        $this->confirmedCasesService = $confirmedCasesService;
    }

    /**
     * Create breakdown by district dashboard.
     *
     * @return void
     */
    public function showBreakdownByDistrict()
    {
        return view('breakdown-by-district-report');
    }

    /**
     * Create daily dashboard.
     *
     * @return void
     */
    public function showDaily()
    {
        return view('daily-report');
    }

    /**
     * Get breakdown by district data
     *
     * @param Request $request Request
     *
     * @return string | \Illuminate\Contracts\Support\Renderable
     */
    public function getBreakdownByDistrictData(Request $request)
    {
        if ($request->ajax()) {
            return $this->confirmedCasesService->getBreakdownByDistrictDataTable();
        }
        return view('breakdown-by-district-report');
    }

    /**
     * Get daily data
     *
     * @param Request $request Request
     *
     * @return string | \Illuminate\Contracts\Support\Renderable
     */
    public function getDailyData(Request $request)
    {
        if ($request->ajax()) {
            return $this->confirmedCasesService->getDailytDataTable();
        }
        return view('daily-report');
    }
}
