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
            $table->string('name_of_agency')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_satisfactions', function (Blueprint $table) {
            $table->dropIfExists('name_of_agency');
        });
    }
};
