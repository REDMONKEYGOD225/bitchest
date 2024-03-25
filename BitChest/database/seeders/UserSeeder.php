<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'id' => 1,
            'name' => 'Joseph Staline',
            'email' => 'joseph1@gmail.com',
            'password' => bcrypt('password1'),
        ]);

        User::create([
            'id' => 2,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password2'),
        ]);

        User::create([
            'id' => 3,
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'password' => bcrypt('password3'),
        ]);
        
        User::create([
            'id' => 4,
            'name' => 'Alice Smith',
            'email' => 'alice.smith@example.com',
            'password' => bcrypt('password4'),
        ]);
        
        User::create([
            'id' => 5,
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'password' => bcrypt('password5'),
        ]);
                
    }
}
