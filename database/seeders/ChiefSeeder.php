<?php

namespace Database\Seeders;

use App\Models\Chief;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ChiefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         if(!Chief::where('register', '1122')->first()) {
            Chief::create([
                'name' => 'Gaby',
                'lastname' => 'Almeida',
                'register' => '2233',
                'email' => 'gaby@company.com',
                'password' => Hash::make('123', ['rounds' => 12]),
                'position' => 'Chief Operating Officer',
                'gender' => 'Female'
            ]);
    }
}

}