<?php

use App\Telephone;
use Illuminate\Database\Seeder;

class TelephoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Telephone::create([
            'number' => '6230579125',
            'user_id' => '1',
        ]);

        Telephone::create([
            'number' => '6211523748',
            'user_id' => '1',
        ]);

        Telephone::create([
            'number' => '6284062639',
            'user_id' => '2',
        ]);

        Telephone::create([
            'number' => '6260363311',
            'user_id' => '3',
        ]);

        Telephone::create([
            'number' => '6233874036',
            'user_id' => '3',
        ]);

        Telephone::create([
            'number' => '6200219726',
            'user_id' => '3',
        ]);

        Telephone::create([
            'number' => '6289916042',
            'user_id' => '7',
        ]);

        Telephone::create([
            'number' => '6274508886',
            'user_id' => '7',
        ]);

        Telephone::create([
            'number' => '6289029141',
            'user_id' => '8',
        ]);

        Telephone::create([
            'number' => '6213722613',
            'user_id' => '9',
        ]);

        Telephone::create([
            'number' => '6229762863',
            'user_id' => '9',
        ]);

        Telephone::create([
            'number' => '6209170879',
            'user_id' => '9',
        ]);

        Telephone::create([
            'number' => '6297260136',
            'user_id' => '9',
        ]);

        Telephone::create([
            'number' => '6222762670',
            'user_id' => '9',
        ]);

        Telephone::create([
            'number' => '6267734022',
            'user_id' => '16',
        ]);

        Telephone::create([
            'number' => '6265444261',
            'user_id' => '17',
        ]);

        Telephone::create([
            'number' => '6284836103',
            'user_id' => '17',
        ]);

        Telephone::create([
            'number' => '6271458221',
            'user_id' => '19',
        ]);

        Telephone::create([
            'number' => '6224950595',
            'user_id' => '20',
        ]);

        Telephone::create([
            'number' => '6213396682',
            'user_id' => '22',
        ]);

        Telephone::create([
            'number' => '6251012452',
            'user_id' => '21',
        ]);

        Telephone::create([
            'number' => '6278515866',
            'user_id' => '21',
        ]);
    }
}
