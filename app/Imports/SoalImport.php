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
            'kd_soal' => $row[0], 
            'slug' => $row[0], 
            'grupsoal_id' => $row[1],
            'pertanyaan' => $row[2],
            'opsi_a' => $row[3], 
            'opsi_b' => $row[4], 
            'opsi_c' => $row[5], 
            'opsi_d' => $row[6], 
            'jawaban' => $row[7], 
            'bobot' => $row[8], 
        ]);
    }
}
