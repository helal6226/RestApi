<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        factory(App\Book::class)->create([
            'isbn' => '9780545162074',
            'author_id' => 1
        ]);

        
        factory(App\Book::class)->create([
            'isbn' => '0029234301',
            'author_id' => 1

        ]);


        
        factory(App\Book::class)->create([
            'isbn' => '0176165495',
            'author_id' => 1

        ]);
    
    }
}
