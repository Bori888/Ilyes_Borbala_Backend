<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EsemenyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Esemenyek::create(['id'=>1,'kategoria_nev'=>'11','esemeny_nev'=>'eskuvo','leiras'=>'Ket elet osszekotese orok eletre','datum'=>'2023.01.01','resztvevok'=>55,'ar'=>4000,'kepUrl'=>'https://eskuvo.png']);
        Esemenyek::create(['id'=>2,'kategoria_nev'=>'22','esemeny_nev'=>'fenyjatek','leiras'=>'csodás dolgok a szinek','datum'=>'2023.01.11','resztvevok'=>45,'ar'=>4000,'kepUrl'=>'https://fenyjatek.png']);
        Esemenyek::create(['id'=>3,'kategoria_nev'=>'33','esemeny_nev'=>'koncert','leiras'=>'A hang az élet érteleme','datum'=>'2023.11.01','resztvevok'=>4,'ar'=>4000,'kepUrl'=>'https://koncert.png']);
        Esemenyek::create(['id'=>4,'kategoria_nev'=>'44','esemeny_nev'=>'szindarab','leiras'=>'Romeo és julia','datum'=>'2023.07.22','resztvevok'=>563,'ar'=>4000,'kepUrl'=>'https://szindarab.png']);

    }
}
