<?php

namespace App\Imports;

use App\Models\trx_siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class NilaiSiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

          // Cek apakah kelas_id valid (>0)
        if (empty($row[2]) || !is_numeric($row[2]) || (int)$row[2] <= 0) {
        // Bisa juga throw error / skip row
        throw new \Exception("kelas_id tidak valid untuk siswa: " . $row[1]);
        }

        return new trx_siswa([
            'id' => $row[0],
            'nama_siswa' => $row[1],
            'kelas_id' => (int)$row[2],
            'matematika' =>(int)$row[3],
            'fisika' => (int)$row[4],
            'kimia' => (int)$row[5],
            'biologi' =>(int)$row[6],
            'bahasa_inggris' => (int)$row[7],
            // 'keterangan' => $row[8],
        ]);
    }
}
