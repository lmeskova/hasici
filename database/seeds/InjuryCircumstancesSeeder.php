<?php

use App\InjuryCircumstance;
use Illuminate\Database\Seeder;

class InjuryCircumstancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $csv = array_map('str_getcsv', file(database_path('seeds/csvFiles/InjuryCircumstances_02.txt')));

        foreach ($csv as $row)
        {
            if(isset($row[2])){

                $rowCopy = $row;

                unset($rowCopy[0]);

                $name = implode(',', $rowCopy);
                $code = $row[0];

                $row = [];

                $row[0] = $code;
                $row[1] = $name;

            }

            InjuryCircumstance::create([
                'name' => $row[1],
                'code' => $row[0]
            ]);
        }    
    }
}
