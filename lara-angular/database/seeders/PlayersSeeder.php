<?php

namespace Database\Seeders;
use Brick\Math\BigInteger;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;




class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('players')->insert([
            'name'=>str::random(10),
            'answers'=>rand(1 ,10),
            'points'=> rand(1,100)




        ]);
    }
}
