<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'amitt6580@gmail.com', 'password' => '$2y$10$akHCvTRpvma2eB8VOqUEoOtpWEelS2/e2TZK3LJyfLxuvw8MrQxVq', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
