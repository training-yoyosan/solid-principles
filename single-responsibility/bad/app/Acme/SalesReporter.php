<?php

namespace Acme;

use Auth;
use DB;

class SalesReporter
{
    public function between($startDate, $endDate)
    {
        // Perform authentication
        if (! Auth::check()) {
            throw new \Exception('Authentication required for reporting!');
        }

        // get sales from db
        $sales = $this->queryDBForSales($startDate, $endDate);

        // return results
        return $this->format($sales);
    }

    protected function queryDBForSales($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }

    protected function format($sales)
    {
        return '<h1>Sales: ' . $sales . '</h1>';
    }
}
