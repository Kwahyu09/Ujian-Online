<?php

namespace App\Imports;

use App\Models\Soal;
use Maatwebsite\Excel\Concerns\ToModel;

class SoalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Soal([
            'grupsoal_id' => $row[0],
            'pertanyaan' => $row[1],
            'opsi_a' => $row[2], 
            'opsi_b' => $row[3], 
            'opsi_c' => $row[4], 
            'opsi_d' => $row[5], 
            'jawaban' => $row[6], 
            'bobot' => $row[7], 
        ]);
    }
}
