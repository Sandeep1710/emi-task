<?php

namespace App\Repositories\Process;

use Illuminate\Support\Facades\DB;

class ProcessRepository implements ProcessRepositoryInterface
{
    public function createTable($sql)
    {
        
        DB::statement('DROP TABLE IF EXISTS emi_details');
        return DB::statement($sql);
    }
}
