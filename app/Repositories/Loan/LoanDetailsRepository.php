<?php

namespace App\Repositories\Loan;

use App\Models\LoanDetail;

class LoanDetailsRepository implements LoanDetailsRepositoryInterface
{
    public function getAllLoanDetails()
    {
        return LoanDetail::all();
    }
}
