<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\bunises;

class BunisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bunises::factory(2)->create(); //cria dois registros 
        //DB::table('bunises')->DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])
    }
}
