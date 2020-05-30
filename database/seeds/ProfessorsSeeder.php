<?php

use Illuminate\Database\Seeder;

class ProfessorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professors')->insert([
            [
                'name' => 'Dr. Rakkar',
                'gradebook_id' => 1
            ],
            [
                'name' => 'Savo iz Kikinde',
                'gradebook_id' => 2
            ],
            [
                'name' => 'Aleksandar Rcovic',
                'gradebook_id' => 3
            ],
        ]);
    }
}
