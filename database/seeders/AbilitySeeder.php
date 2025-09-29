<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitySeeder extends Seeder
{

public function run(): void
{
    DB::table('abilities')->insert([
        [
            'name' => 'Hit Harder',
            'description' => 'If it isn\'t dying, just swing harder.',
            'damage' => 80,
            'class_id' => 1,
        ],
        [
            'name' => 'Hit More',
            'description' => 'If there are too many, just swing wider.',
            'damage' => 40,
            'class_id' => 1,
        ],
        [
            'name' => 'Piercing Arrow',
            'description' => 'Shoots an arrow that pierces multiple enemies.',
            'damage' => 50,
            'class_id' => 2,
        ],
        [
            'name' => 'Poison Arrow',
            'description' => 'Some say cheating, you say surviving.',
            'damage' => 60,
            'class_id' => 2,
        ],
        [
            'name' => 'Rapid Fire',
            'description' => 'one of these is bound to hit something.',
            'damage' => 33,
            'class_id' => 2,
        ],
        [
            'name' => 'Fireball',
            'description' => 'Look, we\'ve seen this one for years. You know what it does',
            'damage' => 80,
            'class_id' => 3,
        ],
        [
            'name' => 'Iceball',
            'description' => 'A variant more popular during Summer.',
            'damage' => 80,
            'class_id' => 3,
        ],
        [
            'name' => 'Magic Missile',
            'description' => 'Shoot a streak of purple magic at the foe.',
            'damage' => 50,
            'class_id' => 3,
        ],
        [
            'name' => 'Nonmagic Missile',
            'description' => 'This is just a crossbow. Real funny, pal.',
            'damage' => 50,
            'class_id' => 3,
        ]
    ]);
}
}
