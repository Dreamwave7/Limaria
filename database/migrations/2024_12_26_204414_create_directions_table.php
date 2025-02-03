<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("name");
            $table->string("abbreviation");
            $table->text("description");
            $table->tinyInteger("status")->default(1);
            $table->timestamps();
        });
        DB::table('directions')->insert([
            [
                'title' => 'Харчовка',
                'name' => 'food',
                'abbreviation' => 'FD',
                'description' => 'Description for Direction food',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Медицина',
                'name' => 'medicine',
                'abbreviation' => 'MDN',
                'description' => 'Description for Direction medicine',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ветеринарія',
                'name' => 'veterinary',
                'abbreviation' => 'VTR',
                'description' => 'Description for Direction veterinary',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directions');
    }
};
