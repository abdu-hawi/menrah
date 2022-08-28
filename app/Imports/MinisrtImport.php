<?php

namespace App\Imports;

use App\Models\Ministry;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MinisrtImport implements ToModel//, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ministry([
            'DIVISION_NAME' => $row[0],
            'RECEIVE_DIVISION_NAME' => $row[1],
            'REG_DATE' => $row[2],
            'REFERRAL_STATUS_DATE' => $row[3],
            'SEND_DIVISION_NAME' => $row[4],
            'SESSION_DATE_FIRST' => $row[5],
            'SESSIONS_INSDAT_FIRST' => $row[6],
            'DEFENDANT' => $row[7],
            'PLAINTIFFS' => $row[8],
        ]);
    }
}
