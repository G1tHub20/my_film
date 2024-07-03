<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert([
            [
               'director' => 'ジョージ・ミラー' ,
               'created_at' => Now()
            ],
            [
                'director' => '堤幸彦' ,
                'created_at' => Now()
             ],
            [
                'director' => 'スティーブン・スピルバーグ' ,
                'created_at' => Now()
             ],
            [
                'director' => 'クリス・コロンバス' ,
                'created_at' => Now()
             ],
            [
                'director' => 'ジョン・ラセター' ,
                'created_at' => Now()
             ],
            [
                'director' => 'N/A' ,
                'created_at' => Now()
             ],
        ]);
    }
}
