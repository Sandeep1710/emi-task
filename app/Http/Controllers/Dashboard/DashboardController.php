<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Loan\LoanDetailsServiceInterface;
use Illuminate\Http\Request;
use Exception;

class DashboardController extends Controller
{
    protected $loanDetailsService;

    public function __construct(LoanDetailsServiceInterface $loanDetailsService)
    {
        $this->loanDetailsService = $loanDetailsService;
    }

    public function loanDetails()
    {
        $loanDetails = $this->loanDetailsService->getAllLoanDetails();
        return view('loan-details', compact('loanDetails'));
    }

    public function processData()
    {
        return view('process-data');
    }
}
