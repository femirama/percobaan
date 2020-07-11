<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use Faker\Factory as Faker;

class AsetSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
		$faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){

	        // DB::table('aset_bpbj')->insert([
	        //     'nama_brg' => $faker->name,
	        //     'merk' => $faker->sentence(3),
	        //     'tahun' => $faker->randomNumber(5),
	        //     'id_uuid' => Uuid::uuid4()->getHex()
	        // ]);

	        DB::table('aset_bpbj')->insert([
	            'nama_brg' => $faker->name,
	            'merk' => $faker->sentence(3),
	            'tahun' => $faker->randomNumber(5),
	            'id_uuid' => Uuid::uuid4()->getHex()
	        ]);
	    }
    }
}
