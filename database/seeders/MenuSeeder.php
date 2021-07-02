<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Para ti',
                'slug' => '',
                'subtitle' => 'Selección con tus intereses'
            ],
            [
                'name' => 'Ciencias',
                'slug' => 'ciencias',
            ],
            [
                'name' => 'Historia',
                'slug' => 'historia',
            ],
            [
                'name' => 'Poesía',
                'slug' => 'poesia',
            ],
            [
                'name' => 'Revistas',
                'slug' => 'revistas',
            ],
            [
                'name' => 'Matemáticas',
                'slug' => 'matematicas',
            ],
        ];
        foreach ($data as $item) {
            DB::table('menus')->insert([
                'name' => $item['name'],
                'slug' => $item['slug'],
                'subtitle' => $item['subtitle']??'',
            ]);
        }
    }
}
