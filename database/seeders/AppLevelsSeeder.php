<?php

namespace Database\Seeders;

use App\Models\AppLevel;
use Illuminate\Database\Seeder;

class AppLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appLevel = new AppLevel();
        $appLevel->name = 'admin';
        $appLevel->display = 'directeur'; 
        $appLevel->save();
    }
}
