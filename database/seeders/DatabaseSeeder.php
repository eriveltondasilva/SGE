<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //
        DB::table('school_years')->insert([
           'year' => '2023',
        ]);


        // Inserir itens na tabela roles
        DB::table('bimesters')->insert([
            [
                'name' => '1º bimestre',
                'abbr' => '1º BIM',
            ],
            [
                'name' => '2º bimestre',
                'abbr' => '2º BIM',
            ],
            [
                'name' => '3º bimestre',
                'abbr' => '3º BIM',
            ],
            [
                'name' => '4º bimestre',
                'abbr' => '4º BIM',
            ],
        ]);


        // Inserir itens na tabela roles
        DB::table('roles')->insert([
            [
                'name'        => 'admin',
                'translation' => 'administrador(a)',
            ],
            [
                'name'        => 'manager',
                'translation' => 'gestor(a)',
            ],
            [
                'name'        => 'coordinator',
                'translation' => 'coordenador(a)',
            ],
            [
                'name'        => 'teacher',
                'translation' => 'professor(a)'],
            [
                'name'        => 'student',
                'translation' => 'aluno(a)',
            ],
        ]);


        //
        DB::table('schools')->insert([
            [
                'name' => 'Escola de Educação Básica Teste',
                'abbr' => 'Escola Teste'
            ],
            [
                'name' => 'Escola De Educação Básica Centro Educacional Viver',
                'abbr' => 'Escola Viver'
            ],
            [
                'name' => 'Escola De Educação Básica Centro Educacional Viver',
                'abbr' => 'Escola Livramento'
            ],
        ]);


        //
        DB::table('users')->insert([
            [
                'name'      => 'Erivelton da Silva',
                'email'     => 'eriveltondasilva13@gmail.com',
                'password'  => '$2y$10$pI3e3VGJXsDIfqDVFH7tBOit2GwHHJetEmVLwfctHD4x3reePI1fa',
                'school_id' => '2',
                'role_id'   => '1',
            ],
            [
                'name'      => 'Maria',
                'email'     => 'maria@gmail.com',
                'password'  => '$2y$10$pI3e3VGJXsDIfqDVFH7tBOit2GwHHJetEmVLwfctHD4x3reePI1fa',
                'school_id' => '2',
                'role_id'   => '2',
            ],
            [
                'name'      => 'José',
                'email'     => 'jose@gmail.com',
                'password'  => '$2y$10$pI3e3VGJXsDIfqDVFH7tBOit2GwHHJetEmVLwfctHD4x3reePI1fa',
                'school_id' => '3',
                'role_id'   => '3',
            ],
            [
                'name'      => 'Paulo',
                'email'     => 'paulo@gmail.com',
                'password'  => '$2y$10$pI3e3VGJXsDIfqDVFH7tBOit2GwHHJetEmVLwfctHD4x3reePI1fa',
                'school_id' => '3',
                'role_id'   => '4',
            ],
        ]);


        //
        DB::table('subjects')->insert([
            [
                'name' => 'Artes',
                'abbr' => 'ART',
            ],
            [
                'name' => 'Ciências',
                'abbr' => 'CIE',
            ],
            [
                'name' => 'Educação Física',
                'abbr' => 'EFI',
            ],
            [
                'name' => 'Geografia',
                'abbr' => 'GEO',
            ],
            [
                'name' => 'História',
                'abbr' => 'HIS',
            ],
            [
                'name' => 'Língua Inglesa',
                'abbr' => 'LIN',
            ],
            [
                'name' => 'Língua Portuguesa',
                'abbr' => 'LPO',
            ],
            [
                'name' => 'Matemática',
                'abbr' => 'MAT',
            ],
        ]);


        //
        DB::table('relatives')->insert([
            'name' => 'Maria José',
        ]);


        //
        \App\Models\Student::factory(200)->create();
        \App\Models\Teacher::factory(20)->create();
        \App\Models\Address::factory(200)->create();



        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
