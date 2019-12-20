<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $a = new User;
        $a->name = " Matilda";
        $a->email = "hrussel@hotmail.com";
        $a->password = bcrypt('12345678');
        $a->is_student = 0;
        $a->is_author = 1;
        $a->save();

        factory(App\User::class,10)->create(
            [
                'is_author' => 0,
                'is_student' => 1
            ]
        );
        
        factory(App\User::class,10)->create(
            [
                'is_author' => 1,
                'is_student' => 0
            ]
        );
       
        
    }
}
