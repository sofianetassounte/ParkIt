<?php

use Faker\Calculator\Iban;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rentableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rentables')->insert([
            'user_id' => 0,
            'adress' => 'Koning Boudewijnlaan 2',
            'postal_code' => '3500',
            'date_of_hire' => date("Y-m-d", strtotime("2020-06-28")),
            'start_time' => date("H:i", strtotime('6:00')),
            'end_time' => date("H:i", strtotime('18:30')),
            'price' => 3.5,
            'bankaccount_nr' => 'BE75499707181526',
            'description' => 'parking achter het hek',
        ]);
        DB::table('rentables')->insert([
            'user_id' => 1,
            'adress' => 'Kolonel Dusartplein 4569',
            'postal_code' => '3500',
            'date_of_hire' => date("Y-m-d", strtotime("2020-06-28")),
            'start_time' => date("H:i", strtotime('8:00')),
            'end_time' => date("H:i", strtotime('16:00')),
            'price' => 1,
            'bankaccount_nr' => 'BE75499707181587',
            'description' => 'parking achter de frituur',
        ]);
        DB::table('rentables')->insert([
            'user_id' => 1,
            'adress' => 'Kolonel Dusartplein 42',
            'postal_code' => '3500',
            'date_of_hire' => date("Y-m-d", strtotime("2020-06-28")),
            'start_time' => date("H:i", strtotime('6:15')),
            'end_time' => date("H:i", strtotime('17:00')),
            'price' => 7,
            'bankaccount_nr' => 'BE75499707181587',
            'description' => 'je moet naar de ondergrondse parking gaan',
        ]);
        DB::table('rentables')->insert([
            'user_id' => 3,
            'adress' => 'Martelarenlaan 17',
            'postal_code' => '3500',
            'date_of_hire' => date("Y-m-d", strtotime("2020-06-28")),
            'start_time' => date("H:i", strtotime('9:00')),
            'end_time' => date("H:i", strtotime('15:00')),
            'price' => 0.5,
            'bankaccount_nr' => 'BE75499707181483',
            'description' => 'Parking is achter de bibliotheek',
        ]);
        factory(App\Models\Rentable::class, 100)->create();
    }
}
