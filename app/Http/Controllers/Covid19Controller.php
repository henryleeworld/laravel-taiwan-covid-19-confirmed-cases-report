<?php

namespace App\Http\Controllers;

use App\Http\Integrations\Covid_19\Covid19Connector;
use Illuminate\Http\Request;

class Covid19Controller extends Controller
{

    private $covid19Connector;

    /**
     * Instantiate a new Covid19Controller instance.
     */
    public function __construct(Covid19Connector $covid19Connector)
    {
        $this->covid19Connector = $covid19Connector;
    }

    /**
     * Get breakdown by district data.
     */
    public function getBreakdownByDistrictData(Request $request)
    {
        if ($request->ajax()) {
            return $this->covid19Connector->getBreakdownByDistrictDataTable();
        }
        return view('breakdown-by-district-report');
    }

    /**
     * Get breakdown by age data.
     */
    public function getBreakdownByAgeData(Request $request)
    {
        if ($request->ajax()) {
            return $this->covid19Connector->getBreakdownByAgeDataTable();
        }
        return view('breakdown-by-age-report');
    }

    /**
     * Get daily data.
     */
    public function getDeathData(Request $request)
    {
        if ($request->ajax()) {
            return $this->covid19Connector->getDeathDataTable();
        }
        return view('death-report');
    }

    /**
     * Create breakdown by district dashboard.
     */
    public function showBreakdownByDistrict()
    {
        return view('breakdown-by-district-report');
    }

    /**
     * Create breakdown by age dashboard.
     */
    public function showBreakdownByAge()
    {
        return view('breakdown-by-age-report');
    }

    /**
     * Create death dashboard.
     */
    public function showDeath()
    {
        return view('death-report');
    }
}
