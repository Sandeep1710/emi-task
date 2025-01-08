<?php

namespace App\Services\Loan;

use App\Repositories\Loan\LoanDetailsRepositoryInterface;

class LoanDetailsService implements LoanDetailsServiceInterface
{
    protected $loanDetailsRepository;

    public function __construct(LoanDetailsRepositoryInterface $loanDetailsRepository)
    {
        $this->loanDetailsRepository = $loanDetailsRepository;
    }

    public function getAllLoanDetails()
    {
        return $this->loanDetailsRepository->getAllLoanDetails();
    }
}
