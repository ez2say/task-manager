<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            ['name' => 'Сложная','color'=>'#6610f2'],
            ['name' => 'Легкая','color'=>'#0d6efd'],
            ['name' => 'Чуть сложная','color'=>'#6f42c1'],
            ['name' => 'TRY HARD','color'=>'#adb5bd'],
            ['name' => 'Для детей','color'=>'#0dcaf0'],
            ['name' => 'Вообще на раз','color'=>'#198754'],
            ['name' => 'Одним пальцем','color'=>'#d63384'],
            ['name' => 'ЧТОТУТПРОИСХОДИТ','color'=>'#dc3545'],
            ['name' => 'Что-то на университетском,непонятное,умное. Да и вообще,что тут делает этот тег','color'=>'#fd7e14'],



        ]);
        //
    }
}
