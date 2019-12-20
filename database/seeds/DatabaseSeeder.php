<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);

        $this->call(StudentsTableSeeder::class);
        $this->call(StudentCardsTableSeeder::class);
        //$this->call(LoansTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);

        
        

    }
}
