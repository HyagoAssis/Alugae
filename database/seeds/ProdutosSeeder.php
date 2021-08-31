<?php

use App\Produtos;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produtos::updateOrCreate(
            [
                'nome' => "Bola de Futebol",
                'descricao' => 'Bola de Futebol de Campo Nike CSF Strike SP21',
                'imagem' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSHD_6trW5pYgBmkgawngwmrf4IceYXST3JDg8t4KOsTGul9VCdYv8hZC_sMXvQB9hHuX7mW_IFc0A&usqp=CAc',
                'preco' => 5,
                'status' => true,
                'user_id' => 2,
                'categoria_id' => 3
            ],
        );
        Produtos::updateOrCreate(
            [
                'nome' => "Vestido de noiva florido",
                'descricao' => 'Lindo vestido de noiva.',
                'imagem' => 'https://ae01.alicdn.com/kf/H336179fb822a4e52a28d36781f3d2b75Q/Sevintage-bola-vestido-feito-m-o-3d-flores-vestidos-de-noiva-boho-vestidos-de-casamento-querida.jpg_Q90.jpg_.webp',
                'preco' => 1500,
                'status' => false,
                'user_id' => 2,
                'categoria_id' => 5
            ],
        );
        Produtos::updateOrCreate(
            [
                'nome' => "Câmera Sony A6600",
                'descricao' => 'Câmera profissional. Se estragar tem que pagar 15000',
                'imagem' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCFMQ_oWgdK2A127iRHDI7jrVrm_dOPhV5lBsfHkJ0BZoEN70hNzi6Q9ZEdsk&usqp=CAc',
                'preco' => 400,
                'status' => false,
                'user_id' => 2,
                'categoria_id' => 5
            ],
        );
    }
}
