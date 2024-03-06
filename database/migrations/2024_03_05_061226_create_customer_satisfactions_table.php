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
            $table->string('types_of_goods_services')->nullable();
            $table->tinyinteger('age');
            $table->tinyinteger('gender');
            $table->string('name_of_agency')->nullable();
            $table->tinyinteger('internal_external')->default(0);
            $table->tinyinteger('individual_group')->default(0);
            $table->tinyinteger('private_government')->default(0);
            $table->tinyinteger('criteria_quality_of_goods')->default(1);
            $table->tinyinteger('criteria_courteousness')->default(1);
            $table->tinyinteger('criteria_responsiveness')->default(1);
            $table->tinyinteger('criteria_overall_experience')->default(1);
            $table->tinyinteger('promoter_score')->default(1);
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
