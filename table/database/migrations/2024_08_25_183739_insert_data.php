<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up()
    {
        // Insert data into users table
        DB::table('user')->insert([
            ['id' => 1, 'name' => 'John Doe', 'fk_department' => 'finance', 'fk_designation' => 'new_ziland', 'phone_number' => 9187653425, 'created_at' => now()],
            ['id' => 2, 'name' => 'peter', 'fk_department' => 'accounts', 'fk_designation' => 'dubai', 'phone_number' => 7198765423, 'created_at' => now()],
        ]);

        // Insert data into products table
        DB::table('designation')->insert([
            ['id' => 1, 'name' => 'harry', 'created_at' => now()],
            ['id' => 2, 'name' => 'james', 'created_at' => now()],
        ]);

        // Insert data into orders table
        DB::table('department')->insert([
            ['id' => 1, 'name' => 'luffy', 'created_at' => now()],
            ['id' => 2, 'name' => 'zoro', 'created_at' => now()],
        ]);
    }

    public function down()
    {
        // Optional: Remove the inserted data when rolling back
        DB::table('user')->truncate();
        DB::table('designation')->truncate();
        DB::table('department')->truncate();
    }
};
