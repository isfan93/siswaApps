<?php

namespace App\Exports;

use App\Models\trx_siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class NilaiSiswaExport implements FromCollection, WithMapping, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return trx_siswa::select('id', 'nisn', 'nama_siswa', 'kelas_id', 'jenis_kelamin', 'matematika', 'fisika', 'kimia', 'biologi', 'bahasa_inggris','keterangan')
            ->with('siswa','kelas')
            ->get();
        // return trx_siswa::with('siswa','kelas')->get();
        
    }

    public function headings(): array
    {
        return [
            'NISN',
            'NAMA SISWA',
            'KELAS',
            'JENIS KELAMIN',
            'MATEMATIKA',
            'FISIKA',
            'KIMIA',
            'BIOLOGI',
            'BAHASA INGGRIS',
            'JURUSAN',
        ];
    }

    public function map($row): array
    {
        return [
            $row->nisn,
            $row->nama_siswa,
            $row->kelas->nama_kelas ?? '-',
            $row->jenis_kelamin,
            $row->matematika,
            $row->fisika,
            $row->kimia,
            $row->biologi,
            $row->bahasa_inggris,
            $row->keterangan,
        ];
    }

    public function styles(Worksheet $sheet)
        {
            return [
                // Example: Apply bold font to the first row
                1 => ['font' => ['bold' => true]],
            ];
        }
}
