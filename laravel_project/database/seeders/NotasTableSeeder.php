<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NotasTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('notas')->insert([
            [
                'alumno_id' => 1, // Juan Pérez
                'asignatura_id' => 1, // Matemáticas
                'nota' => 8.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumno_id' => 2, // María González
                'asignatura_id' => 2, // Física
                'nota' => 7.0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'alumno_id' => 3, // Carlos López
                'asignatura_id' => 1, // Matemáticas
                'nota' => 9.0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
