<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            'Certificaciones',
            'Telecomunicaciones',
            'Redes Eléctricas',
            'Circuito Cerrado TV',
            'Corriente Regulada',
            'Data Centers',
            'Fibra Óptica',
            'Cable Estructurado',
            'Pólizas',
            'Outsourcing',
        ];

        foreach($fields as $field) {
            Field::create([
                'field' => $field,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
