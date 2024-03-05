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
        Schema::create('customer_satisfactions', function (Blueprint $table) {
            $table->id();
            $table->time('csf_time');
            $table->date('csf_date');
            $table->string('name');
            $table->integer('contact_details')->nullable();
            $table->string('types_of_goods_services');
            $table->tinyinteger('age');
            $table->tinyinteger('gender');
            $table->tinyinteger('customer_type');
            $table->tinyinteger('customer_category');
            $table->tinyinteger('customer_classification');
            $table->tinyinteger('criteria_quality_of_goods');
            $table->tinyinteger('criteria_courteousness');
            $table->tinyinteger('criteria_responsiveness');
            $table->tinyinteger('criteria_overall_experience');
            $table->tinyinteger('promoter_score');
            $table->string('comments_suggestions')->nullable();
            $table->string('encoder_id')->default(0)->comment('0 - guest entry');
            $table->string('office_id')->default(0);
            $table->string('control_number')->nullable()->comment('per sections control number');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_satisfactions');
    }
};
