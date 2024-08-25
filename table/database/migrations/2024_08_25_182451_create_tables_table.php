<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fk_department');
            $table->string('fk_designation');
            $table->bigInteger('phone_number');
            $table->timestamp('created_at');
        });

        Schema::create('designation', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at');
        });

        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('designation');
        Schema::dropIfExists('department');
    }
};
