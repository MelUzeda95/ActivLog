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
        Schema::create('activityregistry', function (Blueprint $table) {
            $table->id();
            $table  ->foreignId('user_id')->notNullable();
            $table->string('activity_name')-> notNullable();
            $table->date('activity_day')-> notNullable();
            $table->time('activity_duration')->notNullable();
            $table->integer('distance_activity')->notNullable();
            $table->integer('lost_calories')->unique()->notNullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activityregistry');
    }
};
