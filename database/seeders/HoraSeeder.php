<?php

namespace Database\Seeders;

use App\Models\Hora;
use Illuminate\Database\Seeder;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hora::create(['Hora'=>'7:30-8:20']);
        Hora::create(['Hora'=>'8:20-9:10']);
        Hora::create(['Hora'=>'9:10-10:00']);
        Hora::create(['Hora'=>'10:30-11:20']);
        Hora::create(['Hora'=>'11:20-12:10']);
        Hora::create(['Hora'=>'12:10-13:00']);
        Hora::create(['Hora'=>'13:00-13:50']);
        Hora::create(['Hora'=>'13:50-14:40']);
        Hora::create(['Hora'=>'14:40-15:30']);
    }
}
