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
        Schema::create('tab_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('table_name');
            $table->enum('sheet',['sheet1','sheet2','sheet3'])->nullable();
            $table->enum('update_status',['pending','success'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab_lists');
    }
};
