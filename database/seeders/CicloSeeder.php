<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CicloEscolar;
class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CicloEscolar::create(['Semestre'=>'Agosto-Diciembre2022']);
        CicloEscolar::create(['Semestre'=>'Febrero-Julio2023']);
        CicloEscolar::create(['Semestre'=>'Agosto-Diciembre2023']);
        CicloEscolar::create(['Semestre'=>'Febrero-Julio2024']);
        CicloEscolar::create(['Semestre'=>'Agosto-Diciembre2024']);
    }
}
