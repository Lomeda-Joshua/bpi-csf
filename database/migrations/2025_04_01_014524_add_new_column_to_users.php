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
            $table->tinyInteger('is_focal')->default(0)->comment('0 = inactive, 1 = active');
            $table->dateTime('assigning_TimeStamp', precision: 0)->nullable()->comment('assigning timestamp to be focal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_focal');
            $table->dropColumn('assigning_TimeStamp');
        });
    }
};
