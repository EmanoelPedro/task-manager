<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = fake()->name();
        DB::table('boards')->insert([
            'user_id' => 1,
            'slug' => Str::slug($name),
            'name' => $name,
            'description' => 'Uma Breve Descriçao',

        ]);
    }
}
