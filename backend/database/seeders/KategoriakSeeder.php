<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategoriak::create(['id'=>1,'kategoria_nev'=>'11']);
        Kategoriak::create(['id'=>2,'kategoria_nev'=>'22']);
        Kategoriak::create(['id'=>3,'kategoria_nev'=>'33']);
        Kategoriak::create(['id'=>4,'kategoria_nev'=>'44']);

    }
}
