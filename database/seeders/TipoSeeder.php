<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nome' => 'Ao leite']);
        Tipo::create(['nome' => 'Barra']);
        Tipo::create(['nome' => 'Bombom']);
        Tipo::create(['nome' => 'Branco']);
        Tipo::create(['nome' => 'Culinária']);
        Tipo::create(['nome' => 'Diet']);
        Tipo::create(['nome' => 'Meio Amargo']);
    }
    
}
