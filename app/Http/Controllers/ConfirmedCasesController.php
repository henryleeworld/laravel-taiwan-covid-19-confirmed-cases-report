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
     * Create a dashboard.
     *
     * @return void
     */
    public function index()
    {
        return view('report');
    }

    /**
     * Get data
     *
     * @param Request $request Request
     *
     * @return string | \Illuminate\Contracts\Support\Renderable
     */
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            return $this->confirmedCasesService->getDataTable();
        }
        return view('report');
    }
}
