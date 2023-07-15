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
        Schema::create('subject', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->tinyInteger('status')->default('0'); // 0. Active 1.inActive
            $table->tinyInteger('is_delete')->default('0'); // 0. Not deleted 1.Deleted
            $table->unsignedBigInteger('by_class');
            $table->unsignedBigInteger('created_by');
            $table->timestamps();

            $table->foreign('by_class')
                ->references('id')
                ->on('class')
                ->onDelete('cascade');

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject');
    }
};
