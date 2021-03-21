<?php

namespace Database\Seeders;
use App\Models\Elementos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ElementosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Elementos::create([
            'codigo' => 'inserte el segundo codigo super perron aqui.',
            'descripcion' => 'descripcion super mamalona del segundo codigo.',
            'cantidad' => '1.00',
            'precio' => '1.99',
        ]);
    }
    #DB::table('elementos')->insert([
        #    'codigo' => 'inserte codigo super perron aqui.',
        #    'descripcion' => 'descripcion super mamalona del codigo.',
        #    'cantidad' => '18.00',
        #    'precio' => '19.99',
        #]);
}
