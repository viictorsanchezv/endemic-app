<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = [
            [
                'id' => 1,
                'name' => 'Admin Admin',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'email_verified_at' => now(),
                'password' => Hash::make('admin123456'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Medico Medico',
                'email' => 'medico@gmail.com',
                'role_id' => 2,
                'email_verified_at' => now(),
                'password' => Hash::make('a123456.'),
                'created_at' => now(),
                'updated_at' => now()    
                
            ],
            [
                'id' => 3,
                'name' => 'Periodista Periodista',
                'email' => 'periodista@gmail.com',
                'role_id' => 3,
                'email_verified_at' => now(),
                'password' => Hash::make('a123456.'),
                'created_at' => now(),
                'updated_at' => now()    
                
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
        
        
    }
}
