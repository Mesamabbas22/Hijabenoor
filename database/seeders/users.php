<?php

namespace Database\Seeders;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        user::create([
            'username'=>'admin',
            'password'=>Hash::make('admin123'),
        ]);
    }
}
