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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->integer('author_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    //php artisan db:seed --class=CreateUserSeederC
    //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
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
