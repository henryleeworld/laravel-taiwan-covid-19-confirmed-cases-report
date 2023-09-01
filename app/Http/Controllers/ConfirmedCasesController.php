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
     * Create breakdown by age dashboard.
     *
     * @return void
     */
    public function showBreakdownByAge()
    {
        return view('breakdown-by-age-report');
    }

    /**
     * Create death dashboard.
     *
     * @return void
     */
    public function showDeath()
    {
        return view('death-report');
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
     * Get breakdown by age data
     *
     * @param Request $request Request
     *
     * @return string | \Illuminate\Contracts\Support\Renderable
     */
    public function getBreakdownByAgeData(Request $request)
    {
        if ($request->ajax()) {
            return $this->confirmedCasesService->getBreakdownByAgeDataTable();
        }
        return view('breakdown-by-age-report');
    }

    /**
     * Get daily data
     *
     * @param Request $request Request
     *
     * @return string | \Illuminate\Contracts\Support\Renderable
     */
    public function getDeathData(Request $request)
    {
        if ($request->ajax()) {
            return $this->confirmedCasesService->getDeathDataTable();
        }
        return view('death-report');
    }
}
