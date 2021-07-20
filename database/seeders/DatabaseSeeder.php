<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\TodoList;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Max Grodzki',
            'email' => 'maxgrodzki@gmail.com',
            'id' => 1,
            'password' => 'password',
        ]);

        $list = TodoList::factory()->create();

        Item::factory(3)->create([
            'list_id' => $list->id,
        ]);
        
    }
}
