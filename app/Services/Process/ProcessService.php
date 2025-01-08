<?php

namespace App\Services\Process;

use App\Repositories\Process\ProcessRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProcessService implements ProcessServiceInterface
{
    protected $processService;

    public function __construct(ProcessRepositoryInterface $processRepository)
    {
        $this->processService = $processRepository;
    }

    public function createTable()
    {

        $results = DB::select('SELECT MIN(first_payment_date) AS min_first_payment_date, MAX(last_payment_date) AS max_last_payment_date FROM loan_details');

        $minFirstPaymentDate = $results[0]->min_first_payment_date;
        $maxLastPaymentDate = $results[0]->max_last_payment_date;

        $startDate = Carbon::parse($minFirstPaymentDate);
        $endDate = Carbon::parse($maxLastPaymentDate);

        $months = [];
        while ($startDate->lte($endDate)) {
            $months[] = $startDate->format('Y_') . $startDate->format('M');
            $startDate->addMonth();
        }

        $sql = $this->preparStatement($months);
        return $this->processService->createTable($sql);
    }

    public function preparStatement($months) {
        $columns = '';
        foreach ($months as $month) {
            $columns .= "`{$month}` DECIMAL(5, 2) DEFAULT 00.0, ";
        }

        $columns = rtrim($columns, ', ');

        return "
            CREATE TABLE emi_details (
                id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                clientid BIGINT UNSIGNED NOT NULL,
                {$columns}
            )
        ";
        
    }
}
