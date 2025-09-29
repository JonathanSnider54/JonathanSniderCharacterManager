<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('character_classes')->insert([
        [
            'name'=>'Warrior'
        ],
        [
            'name'=>'Archer'
        ],
        [
            'name'=>'Wizard'
        ]

    ]);
    }
}
