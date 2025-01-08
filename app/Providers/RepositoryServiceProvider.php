<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Loan\LoanDetailsRepositoryInterface;
use App\Repositories\Loan\LoanDetailsRepository;
use App\Services\Loan\LoanDetailsServiceInterface;
use App\Services\Loan\LoanDetailsService;
use App\Repositories\Process\ProcessRepositoryInterface;
use App\Repositories\Process\ProcessRepository;
use App\Services\Process\ProcessServiceInterface;
use App\Services\Process\ProcessService;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(LoanDetailsRepositoryInterface::class, LoanDetailsRepository::class);
        $this->app->bind(LoanDetailsServiceInterface::class, LoanDetailsService::class);

        $this->app->bind(ProcessRepositoryInterface::class, ProcessRepository::class);
        $this->app->bind(ProcessServiceInterface::class, ProcessService::class);
    }

    public function boot()
    {
        //
    }
}
