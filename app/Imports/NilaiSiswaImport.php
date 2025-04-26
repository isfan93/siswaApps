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
        if (empty($row[4]) || !is_numeric($row[4]) || (int)$row[4] <= 0) {
        // Bisa juga throw error / skip row
        throw new \Exception("kelas_id tidak valid untuk siswa: " . $row[1]);
        }

        return new trx_siswa([
            'id' => $row[0],
            'nisn' => (int)$row[1],
            'nama_siswa' => $row[2],
            'jenis_kelamin' => $row[3],
            'kelas_id' => (int)$row[4],
            'matematika' =>(int)$row[5],
            'fisika' => (int)$row[6],
            'kimia' => (int)$row[7],
            'biologi' =>(int)$row[8],
            'bahasa_inggris' => (int)$row[9],
            // 'keterangan' => $row[8],
        ]);
    }
}
