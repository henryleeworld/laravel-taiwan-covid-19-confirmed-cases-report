<?php

namespace App\Http\Controllers;

use App\Http\Integrations\Covid_19\Covid19Connector;
use Illuminate\Http\Request;

class Covid19Controller extends Controller
{

    private $covid19Connector;

    /**
     * Instantiate a new Covid19Controller instance.
     *
     * @param Covid19Connector $covid19Connector COVID-19 connector
     *
     * @return void
     */
    public function __construct(Covid19Connector $covid19Connector)
    {
        $this->covid19Connector = $covid19Connector;
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
            return $this->covid19Connector->getBreakdownByDistrictDataTable();
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
            return $this->covid19Connector->getBreakdownByAgeDataTable();
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
            return $this->covid19Connector->getDeathDataTable();
        }
        return view('death-report');
    }
}
