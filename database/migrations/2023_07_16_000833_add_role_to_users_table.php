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
        Schema::table('users', function (Blueprint $table) {
            $table->smallInteger('role')->default(2);
            $table->date('start_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('mobile')->nullable();
            $table->smallInteger('status')->default(1);
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role']);
            $table->dropColumn(['notes']);
            $table->dropColumn(['mobile']);
            $table->dropColumn(['expiry_date']);
            $table->dropColumn(['start_date']);
            $table->dropColumn(['status']);

        });
    }
};
