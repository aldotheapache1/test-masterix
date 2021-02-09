<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Gian" . Str::random(10),
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros" . Str::random(2),
            'numero' => 123,
            'bairro' => "Vila" . Str::random(5),
            'cidade' => "Nova" . Str::random(5),
            'pais' => "Brasil",
        ]);

        DB::table('contato')->insert([
            'nome' => 'Email',
            'valor' => Str::random(5).'@gmail.com',
        ]);
    }
}
