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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('company', 50);
            $table->string('role', 25);
            $table->text('description');
            $table->string('platform', 25);
            $table->timestamp('apply_at');
            $table->enum('status', ['Send CV','Viewed','Interview HRD','Interview User','Success','Failed']);
            $table->string('link', 128)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
