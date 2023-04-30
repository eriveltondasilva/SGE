<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Relative;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insere no Banco os anos: 2020, 2021, 2022, 2023
        DB::table('school_years')->insert([
           ['year' => '2020'],
           ['year' => '2021'],
           ['year' => '2022'],
           ['year' => '2023'],
        ]);


        // Inserir no Banco os 4 bimestres
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


        // Inserir no Banco todos os roles: admin, manager, coordinator, teacher, student
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


        // Insere no Banco 3 escolas: Escola Teste, Escola Viver, Escola Livramento
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
                'name' => 'Escola De Educação Básica Nossa Senhora do Livramento',
                'abbr' => 'Escola Livramento'
            ],
        ]);


        // Insere no Banco 4 usuários
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


        // Insere no Banco todas as matérias escolares junto com suas abreviações
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
        Teacher::factory()
            ->count(20)
            ->has(Address::factory(), 'address')
            ->create();

        Student::factory()
            ->count(200)
            ->has(Relative::factory(), 'relative')
            ->has(Address::factory(), 'address')
            ->create();


        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
