<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder {

    public function run()
    {
        DB::table('book')->delete();

        Book::create(['email' => 'foo@bar.com']);
    }

}
