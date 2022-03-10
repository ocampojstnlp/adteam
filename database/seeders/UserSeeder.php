<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->first_name = env('ADMIN_FIRSTNAME');
        $user->last_name = env('ADMIN_LASTNAME');
        $user->email = env('ADMIN_EMAIL');
        $user->password = Hash::make(env('ADMIN_PASSWORD'));
        $user->created_at = now();
        $user->updated_at = now();
        $user->save();
    }
}
