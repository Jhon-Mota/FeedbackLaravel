<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Employee::where('register', '1122')->first()) {
            Employee::create([
                'name' => 'John',
                'lastname' => 'River',
                'register' => '1122',
                'email' => 'john@company.com',
                'password' => Hash::make('123', ['rounds' => 12]),
                'position' => 'Aprendicce',
                'gender' => 'Male'
            ]);
        }
    }
}
