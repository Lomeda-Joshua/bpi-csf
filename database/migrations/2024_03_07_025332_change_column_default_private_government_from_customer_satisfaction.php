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
        Schema::table('customer_satisfactions', function (Blueprint $table) {
            $table->string('private_government')->nullable()->change();
            $table->string('encoder_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_satisfactions', function (Blueprint $table) {
            $table->dropIfExists('private_government');
            $table->dropIfExists('encoder_id');
        });
    }
};
