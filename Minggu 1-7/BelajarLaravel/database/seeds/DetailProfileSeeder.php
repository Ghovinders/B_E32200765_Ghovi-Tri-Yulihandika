<?php

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table mahasiswa
        DB::table('detail_profile')->insert([
            'address' => 'Sumenep',
            'nomor_tlp' => '082334796467',
            'ttl' => '2002-05-05',
            'foto' => 'picture.png',
        ]);
    }
}
