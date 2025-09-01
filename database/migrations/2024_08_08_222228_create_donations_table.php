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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->default(1)->comment('개인/단체');
            $table->string('pay_method', 16)->comment('결제방법');
            $table->unsignedInteger('donation')->default(0)->comment('후원금');
            $table->string('name', 64)->comment('이름');
            $table->string('contact', 16)->comment('연락처');
            $table->string('email', 32)->comment('이메일');
            $table->text('content')->nullable()->comment('후원자의 한마디');
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
        Schema::dropIfExists('donations');
    }
};
