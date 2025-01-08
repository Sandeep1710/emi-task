<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Process\ProcessServiceInterface;

class ProcessController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $processService;

    public function __construct(ProcessServiceInterface $processService)
    {
        $this->processService = $processService;
    }

    public function createTable()
    {
        if($this->processService->createTable()) {
            $emiDetails = DB::table('emi_details')->get();
            return view('emi-details',compact('emiDetails'));
        } else {
            return redirect()->route('process.data')->with('Error', 'Error while exicuting the query.');
        }

    }
}
