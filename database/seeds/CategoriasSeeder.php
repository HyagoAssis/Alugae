<?php

use App\Categorias;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Categorias::class, 5)->create();
        Categorias::updateOrCreate(
            [
                'nome' => 'Para Casa',
            ],
        );
        Categorias::updateOrCreate(
            [
                'nome' => 'Acessórios da Moda',
            ],
        );
        Categorias::updateOrCreate(
            [
                'nome' => 'Esportes',
            ],
        );
        Categorias::updateOrCreate(
            [
                'nome' => 'Livros',
            ],
        );
        Categorias::updateOrCreate(
            [
                'nome' => 'Eletrônicos',
            ],
        );
        Categorias::updateOrCreate(
            [
                'nome' => 'Instrumentos Musicais',
            ],
        );
    }
}
