<?php

use Illuminate\Database\Seeder;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodata=[
            [
                'id'=>'01',
                'nama'=>'zidane',
                'jenis_kelamin'=>'laki-laki',
                'alamat'=>'jatikulon',
                'usia'=>'16'
            ],
            [
                'id'=>'02',
                'nama'=>'maulana',
                'jenis_kelamin'=>'laki-laki',
                'alamat'=>'jatiwetan',
                'usia'=>'16'
            ],
            [
                'id'=>'03',
                'nama'=>'chilmy',
                'jenis_kelamin'=>'laki-laki',
                'alamat'=>'jati',
                'usia'=>'16'
            ],    
            ];
            DB::table('biodata')->insert($biodata);
    }
}
