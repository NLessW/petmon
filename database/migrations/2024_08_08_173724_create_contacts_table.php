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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('organization')->comment('단체명');
            $table->string('name', 64)->comment('담당자명');
            $table->string('contact', 16)->comment('연락처');
            $table->string('email', 32)->comment('이메일');
            $table->text('content')->nullable()->comment('문의내용');
            $table->boolean('checked')->default(false)->comment('확인여부');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
