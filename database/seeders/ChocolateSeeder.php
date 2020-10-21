<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChocolateSeeder extends Seeder
{
    /**
     * Run the database seeder
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['categoria' => 'Classico']);
        Tipo::create(['categoria' => 'Coco']);
        Tipo::create(['categoria' => 'Crocante']);
        Tipo::create(['categoria' => 'Gourmet']);
        Tipo::create(['categoria' => 'Importado']);


    }
}
