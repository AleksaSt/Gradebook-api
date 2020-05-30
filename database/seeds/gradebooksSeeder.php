<?php

use Illuminate\Database\Seeder;

class gradebooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gradebooks')->insert([
            [
                'name' => 'MAsna',
                'professor_id' => 1
            ],
            [
                'name' => 'Ispovesti Jednog ',
                'professor_id' => 2
            ],
            [
                'name' => 'Leprozni',
                'professor_id' => 3
            ],
        ]);
    }
}
