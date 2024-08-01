<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\PatientRecord;


class PatientsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return PatientRecord::all(); // Retrieve all patient records
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Patient Name',
            'Patient Age',
            'Patient Email',
            'Patient Height',
            'Patient BP',
            'Patient DOb',
            'Patient Gender',
            'Patient Address',
            'Patient Weight',
            'Patient Visit Date',
            'Visit Purpose',
            'Contact Person Name',
            'Contact Person Number',
            'Relationship',
            'Medicines',
            'Created At',
            'Updated At',
        ];
    }
}
