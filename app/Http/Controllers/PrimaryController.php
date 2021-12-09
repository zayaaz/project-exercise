<?php

namespace App\Http\Controllers;

use View;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Services\PrimaryServices;

class PrimaryController extends Controller
{
    /** @var \App\Services\PrimaryServices $primaryServices   Primary service. */
    protected $primaryServices;

    /**
     * Create a new PrimaryController.
     *
     */
    public function __construct(PrimaryServices $primaryServices)
    {
        $this->primaryServices = $primaryServices;
    }

    /**
     * Destroy this controller.
     */
    public function __destruct()
    {
    }

    /**
     * Display main landing page
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('welcome');
    }

    /**
     * Display main landing page
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postTest(Request $request)
    {
        Log::info($request->all());
        Log::info('tesst');
    }
}
