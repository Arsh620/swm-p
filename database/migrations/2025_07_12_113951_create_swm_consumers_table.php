<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('swm_consumers', function (Blueprint $table) {
            $table->id();
            $table->string('ward_no', 100)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('holding_no', 100)->nullable();
            $table->string('mobile_no', 100)->nullable();
            $table->string('address', 500)->nullable();
            $table->unsignedBigInteger('consumer_category_id')->nullable();
            $table->unsignedBigInteger('consumer_type_id')->nullable();
            $table->integer('owner_id')->default(0);
            $table->string('consumer_no', 200)->nullable();
            $table->string('pincode', 50);
            $table->unsignedBigInteger('user_id');
            $table->date('entry_date');
            $table->boolean('is_deactivate')->default(0);
            $table->string('license_no', 50)->nullable();
            $table->text('firm_name')->nullable();
            $table->timestamp('stampdate')->nullable();
            $table->unsignedInteger('ulb_id')->nullable();
            $table->unsignedBigInteger('apartment_id')->nullable();
            $table->boolean('is_default')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('swm_consumers');
    }
};
