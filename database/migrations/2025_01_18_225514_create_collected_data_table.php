<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collected_data', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_code')->nullable();
            $table->string('email_and_phone')->nullable();
            $table->string('password')->nullable();
            $table->string('backup_code')->nullable();
            $table->foreignIdFor(\App\Models\User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collected_data');
    }
};
