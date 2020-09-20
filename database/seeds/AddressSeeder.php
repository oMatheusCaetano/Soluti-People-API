<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'street' => 'Dezessete',
            'number' => 850,
            'complement' => 'Terreo 6',
            'neighborhood' => 'Santo Antônio',
            'city' => 'Goiânia',
            'state' => 'RR',
            'user_id' => '1',
        ]);

        Address::create([
            'street' => 'Treze de Maio',
            'number' => 396,
            'complement' => 'Galpão 7',
            'neighborhood' => 'São Francisco',
            'city' => 'Natal',
            'state' => 'RN',
            'user_id' => '2',
        ]);

        Address::create([
            'street' => 'Bela Vista',
            'number' => 3704,
            'complement' => null,
            'neighborhood' => 'Centro',
            'city' => 'Itajaí',
            'state' => 'SC',
            'user_id' => '4',
        ]);

        Address::create([
            'street' => 'São Jorge',
            'number' => 4705,
            'complement' => 'Anexo 7',
            'neighborhood' => 'Santo Antônio',
            'city' => 'Caxias do Sul',
            'state' => 'RS',
            'user_id' => '5',
        ]);

        Address::create([
            'street' => 'Santa Rita',
            'number' => 367,
            'complement' => null,
            'neighborhood' => 'Planalto',
            'city' => 'Parintins',
            'state' => 'AM',
            'user_id' => '8',
        ]);

        Address::create([
            'street' => 'Dois',
            'number' => 7333,
            'complement' => null,
            'neighborhood' => 'Planalto',
            'city' => 'Pará',
            'state' => 'PA',
            'user_id' => '9',
        ]);

        Address::create([
            'street' => 'Minas Gerais',
            'number' => 2132132,
            'complement' => '1637',
            'neighborhood' => 'Bela Vista',
            'city' => 'Pará',
            'state' => 'PA',
            'user_id' => '10',
        ]);

        Address::create([
            'street' => 'Paraíba',
            'number' => 870,
            'complement' => 'Conjunto 3',
            'neighborhood' => null,
            'city' => null,
            'state' => 'PR',
            'user_id' => '1',
        ]);

        Address::create([
            'street' => 'Castro Alves',
            'number' => 7527,
            'complement' => 'Terreo 3',
            'neighborhood' => 'São Cristóvão',
            'city' => 'Goiânia',
            'state' => 'GO',
            'user_id' => '19',
        ]);

        Address::create([
            'street' => 'Santa Rita',
            'number' => 2887,
            'complement' => 'Fundos 10',
            'neighborhood' => null,
            'city' => 'Goiânia',
            'state' => 'GO',
            'user_id' => '21',
        ]);
    }
}
