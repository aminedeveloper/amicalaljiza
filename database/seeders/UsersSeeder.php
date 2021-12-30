<?php

namespace Database\Seeders;

use App\Models\AppLevel;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $appLevel = AppLevel::where('name','admin')->first();
       $user = new User();
       $user->app_level_id = $appLevel->id;
       $user->first_name = 'mohammed amine';
       $user->last_name = 'yassine';
       $user->email = 'issamatouf@gmail.com';
       $user->password = Hash::make('issamatouf2021');
       $user->save();
        
    }
}
