<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,300)->create()->each(function ($user){
            factory(\App\Note::class)->create([
                'user_id' => $user->id,
                'corte' => 1
            ]);
            factory(\App\Note::class)->create([
                'user_id' => $user->id,
                'corte' => 2
            ]);
            factory(\App\Note::class)->create([
                'user_id' => $user->id,
                'corte' => 3
            ]);
        });
    }
}
