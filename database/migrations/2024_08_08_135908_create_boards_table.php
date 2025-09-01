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
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string('type', 8)->comment('유형');
            $table->unsignedInteger('user_id')->comment('사용자ID');
            $table->unsignedInteger('category_id')->default(0)->comment('카테고리');
            $table->string('name', 64)->comment('이름');
            $table->string('title')->comment('제목');
            $table->text('content')->comment('내용');
            $table->unsignedInteger('hit')->default(0)->comment('조회수');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boards');
    }
};
