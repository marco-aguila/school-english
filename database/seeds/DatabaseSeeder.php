<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        User::flushEventListeners();
        $cantidadUsuarios = 1;
        factory(User::class, $cantidadUsuarios)->create();
    }
}
