<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Role::create(['name' => "admin"]);
		Role::create(['name' => "user"]);
    }
}
