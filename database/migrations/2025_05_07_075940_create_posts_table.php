<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // Tiêu đề câu hỏi
            $table->text('content');        // Nội dung chi tiết câu hỏi
            $table->string('option_a');     // Đáp án A
            $table->string('option_b');     // Đáp án B
            $table->string('option_c');     // Đáp án C
            $table->string('option_d');     // Đáp án D
            $table->tinyInteger('is_true'); // Đáp án đúng: 1=A, 2=B, 3=C, 4=D
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
