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
            'nome' => "Gian",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Lucas",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Carlos",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Fábio",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Gabriel",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Gian Lucas",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Lucas Gabriel",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Abel",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Silvia",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Abigail",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        $data = new DateTime("01-01-2000");
        DB::table('pessoas')->insert([
            'nome' => "Carla",
            'data_aniversario' => $data,
            'rua' => "Pedro de Medeiros " ,
            'numero' => 123,
            'bairro' => "Vila " . Str::random(5),
            'cidade' => "Nova " . Str::random(5),
            'estado' => "Mato Grosso do Sul",
            'pais' => "Brasil",
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Email',
            'valor' => Str::random(5).'@gmail.com',
            'pessoa_id' => 1,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Telefone Fixo',
            'valor' => '(62)1234-2354',
            'pessoa_id' => 1,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Email',
            'valor' => Str::random(5).'@gmail.com',
            'pessoa_id' => 2,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Email',
            'valor' => Str::random(5).'@gmail.com',
            'pessoa_id' => 3,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Email',
            'valor' => Str::random(5).'@gmail.com',
            'pessoa_id' => 4,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Email',
            'valor' => Str::random(5).'@gmail.com',
            'pessoa_id' => 5,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Email',
            'valor' => Str::random(5).'@gmail.com',
            'pessoa_id' => 6,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Telefone Fixo',
            'valor' => '(62)1234-2354',
            'pessoa_id' => 7,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Telefone Fixo',
            'valor' => '(62)4444-2354',
            'pessoa_id' => 8,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Telefone Fixo',
            'valor' => '(62)5000-2354',
            'pessoa_id' => 9,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Telefone Fixo',
            'valor' => '(62)2000-2354',
            'pessoa_id' => 10,
        ]);

        DB::table('contatos')->insert([
            'nome' => 'Celular',
            'valor' => '(62)9994-2354',
            'pessoa_id' => 11,
        ]);
    }
}
