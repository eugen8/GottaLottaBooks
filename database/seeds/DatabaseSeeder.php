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
        $this->call(BookTableSeeder::class);
    }
}
class BookTableSeeder extends Seeder {

    public function run()
    {
        DB::table('books')->delete();

        //$json = File::get('./books.json');
        $json = file_get_contents(base_path('database/seeds/books.json'));
        $books = json_decode($json)->books;
        foreach ($books as $book) {
            DB::table('books')->insert([
                'title' => $book->title,
                'authors' => implode(" , ", $book->authors),
                'isbn' => $book->isbn,
                'isbn13' => $book->isbn13,
                'description' => $book->description,
                'image_url' => $book->image_url,
            ]);
        }
    }

}