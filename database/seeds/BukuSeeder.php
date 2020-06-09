<?php

use Illuminate\Database\Seeder;

//use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data faker
       $faker = Faker::create('id_ID');

        //membuata data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){

            // insert data dummy pegawai dengan faker
            DB::table('data_buku')->insert([
                'judul' => 'Buku 1',
                'penulis' => 'Clara',
                'penerbit' => 'Gramedia'
               
            ]);
        }
    }
}
