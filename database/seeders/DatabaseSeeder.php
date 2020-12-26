<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Larissa Moro',
            'email' =>   'lari.moro20@gmail.com',
            'type' => 2,
            'manager' => 0,
            'password' => '1234'
        ]);
        Project::create([
            'title' => 'Projeto1',
            'description' => 'Apenas um exemplo',
            'date_start' => '2020-12-12',
            'date_end' => '2020-12-21',
        ]);
    }
}
