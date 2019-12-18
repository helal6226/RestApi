<?php

use Illuminate\Database\Seeder;
use App\StudentCard;

class StudentCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\StudentCard::class,10)->create();
    }
}
