<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert(
            [
                [
                    'title' => 'общий клининг'
                ],
                [
                    'title' => 'генеральная уборка'
                ],
                [
                    'title' => 'Послестроительная уборка'
                ],
                [
                    'title' => 'Химчистика ковров и мебели'
                ]
            ]
            );
    }
}
