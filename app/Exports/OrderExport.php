<?php

namespace App\Exports;

use App\Models\orders;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;


class OrderExport implements FromQuery
{
    use Exportable;

    public function __construct(int $status)
    {
        $this->status = $status;
    }


    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
       return Orders::query()->where('status','=',$this->status);

    }
}
