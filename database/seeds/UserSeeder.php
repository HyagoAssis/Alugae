<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 10)->create();
        User::updateOrCreate(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com.br',
                'password' => bcrypt('123456'),
                'adm' => true,
                'cpf' => '00000000',
            ],
        );
        User::updateOrCreate(
            [
                'name' => 'Ana Maria',
                'email' => 'ana@admin.com.br',
                'password' => bcrypt('123456'),
                'adm' => false,
                'cpf' => '00000000',
            ],
        );
        User::updateOrCreate(
            [
                'name' => 'Fábio Júnior',
                'email' => 'fabio@admin.com.br',
                'password' => bcrypt('123456'),
                'phone' => '32956528546',
                'adm' => false,
                'cpf' => '00000000',
            ],
        );
    }
}
