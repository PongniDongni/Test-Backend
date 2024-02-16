<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bodega;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Dispositivo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Bodegas
        $bodegas = [
            'PcFactory',
            'Falabella',
            'Paris',
            'SP Digital',
        ];

        foreach($bodegas as $bodega) {
            Bodega::create([
                'name' => $bodega,
            ]);
        };

         //Marcas
         $marcas = [
            'Dell',
            'HP',
            'Logitech',
            'Asus',
            'Acer',
            'Razer',
        ];

        foreach ($marcas as $marca) {
            Marca::create([
                'name' => $marca,
            ]);
        }

        //Modelos
        $modelos = [
            ['Dell Latitude',1],
            ['Pavilion Gaming',2],
            ['15-dy2060la',2],
            ['G703',3], //MOUSE
            ['G733',3], //audifono
            ['G915',3], //teclado
            ['TUF Gaming F15 FX507',4],
            ['Aspire 3',5],
            ['Nitro 5',5],
            ['Cobra Pro',6], //mouse
        ];

        foreach($modelos as $modelo) {
            Modelo::create([
                'name' => $modelo[0],
                'id_marca' => $modelo[1],
            ]);
        };

        //Dispositivos
        $dispositivos = [
            ['Mouse',3,4],
            ['Mouse inalambrico',4,10],
            ['Notebook',2,1],
            ['Notebook',1,3],
            ['Teclado',3,6],
            ['Audifono inalambrico',2,5],
            ['Mouse',2,4],
            ['Teclado',1,6],
            ['Notebook gamer',4,2],
            ['Notebook',4,3],
            ['Audifono inalambrico',3,5],
        ];

        foreach ($dispositivos as $dispositivo) {
            Dispositivo::create([
                'name' => $dispositivo[0],
                'id_bodega' => $dispositivo[1],
                'id_modelo' => $dispositivo[2]
            ]);
        }

    }
}
