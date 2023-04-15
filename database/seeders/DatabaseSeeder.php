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
            ['name' => 'Artes'],
            ['name' => 'Ciências'],
            ['name' => 'Educação Física'],
            ['name' => 'Geografia'],
            ['name' => 'História'],
            ['name' => 'Língua Inglesa'],
            ['name' => 'Língua Portuguesa'],
            ['name' => 'Matemática'],
        ]);

        //
        DB::table('schools')->insert([
            [
                'name'       => 'Escola de Educação Básica Teste',
                'short_name' => 'Escola Teste'
            ],
            [
                'name'       => 'Escola De Educação Básica Centro Educacional Viver',
                'short_name' => 'Escola Viver'
            ],
            [
                'name'       => 'Escola De Educação Básica Centro Educacional Viver',
                'short_name' => 'Escola Livramento'
            ],
        ]);

        //
        DB::table('schoolYears')->insert([
            'year' => '2023',
        ]);

        //
        DB::table('relatives')->insert([
            'name' => 'Maria José',
        ]);


        //
        \App\Models\Student::factory(200)->create();
        \App\Models\Teacher::factory(10)->create();
        \App\Models\Address::factory(200)->create();



        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
