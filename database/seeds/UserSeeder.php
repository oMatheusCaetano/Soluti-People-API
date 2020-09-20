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
    public function run(): void
    {
        User::create([
            'name' => 'Matheus Caetano',
            'email' => 'matheus.caetano@example.com.br',
            'cpf' => '70636323021',
            'date_of_birth' => '1998-02-07',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Hagamenon Nicolau',
            'email' => 'hagamenom.nicolau@example.com.br',
            'cpf' => '90057233004',
            'date_of_birth' => '1995-12-01',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Geraldo Eliezer',
            'email' => 'geraldo.geraldo@example.com.br',
            'cpf' => '92082522059',
            'date_of_birth' => '1993-09-08',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Bruna Carvalho',
            'email' => 'bruna.carvalho@example.com.br',
            'cpf' => '58366559017',
            'date_of_birth' => '1995-08-02',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Diego Godoi',
            'email' => 'diego.godoi@example.com.br',
            'cpf' => '37580275007',
            'date_of_birth' => '1990-05-27',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Angela Fagundes',
            'email' => 'angela.fagundes@example.com.br',
            'cpf' => '16419913055',
            'date_of_birth' => '1998-02-07',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Matheus Caetano',
            'email' => 'matheus.caeta@example.com.br',
            'cpf' => '05686927057',
            'date_of_birth' => '1989-09-28',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Selma Caetano',
            'email' => 'selma.caetano@example.com.br',
            'cpf' => '37652410088',
            'date_of_birth' => '1973-07-12',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Ismael Filho',
            'email' => 'ismael.filho@example.com.br',
            'cpf' => '56578208003',
            'date_of_birth' => '1998-02-07',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Jordy Lino',
            'email' => 'jordy.lino@example.com.br',
            'cpf' => '13398880096',
            'date_of_birth' => '1980-05-21',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Camilla Martins',
            'email' => 'camilla.martins@example.com.br',
            'cpf' => '42544968001',
            'date_of_birth' => '1989-08-06',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Joaquim Silva',
            'email' => 'joaquim.silca@example.com.br',
            'cpf' => '01202983090',
            'date_of_birth' => '1979-12-03',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Milkea Sardeiro',
            'email' => 'milkea.sardeiro@example.com.br',
            'cpf' => '75506959036',
            'date_of_birth' => '1960-01-01',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Bruno Amaral',
            'email' => 'bruno.amaral@example.com.br',
            'cpf' => '40494953098',
            'date_of_birth' => '2000-05-17',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Paula Andréa',
            'email' => 'paula.andrea@example.com.br',
            'cpf' => '07560752039',
            'date_of_birth' => '2002-05-03',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Marcella Belle',
            'email' => 'marcella.belle@example.com.br',
            'cpf' => '67839083056',
            'date_of_birth' => '1998-02-07',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Paulo Cavalcante',
            'email' => 'paulo.cavalcante@example.com.br',
            'cpf' => '26306077049',
            'date_of_birth' => '1998-02-07',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Bruno Barros',
            'email' => 'bruno.barros@example.com.br',
            'cpf' => '13002036099',
            'date_of_birth' => '1992-09-11',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Amanda Lacerda',
            'email' => 'amanda.lacerda@example.com.br',
            'cpf' => '68659888090',
            'date_of_birth' => '1996-10-29',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Guilherme Granja',
            'email' => 'guilherme.granja@example.com.br',
            'cpf' => '34638368077',
            'date_of_birth' => '1991-07-26',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Thayron Feitosa',
            'email' => 'thayron.feitosa@example.com.br',
            'cpf' => '41894064062',
            'date_of_birth' => '1997-02-02',
            'password' => '123456789',
        ]);

        User::create([
            'name' => 'Vitalino Borges',
            'email' => 'vitalino.borges@example.com.br',
            'cpf' => '12669270000',
            'date_of_birth' => '1995-12-25',
            'password' => '123456789',
        ]);
    }
}
