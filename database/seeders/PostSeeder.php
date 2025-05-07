<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::insert([
            [
                'title' => 'Câu hỏi 1',
                'content' => 'Đâu là thủ đô của Việt Nam?',
                'option_a' => 'Hà Nội',
                'option_b' => 'Hồ Chí Minh',
                'option_c' => 'Đà Nẵng',
                'option_d' => 'Huế',
                'is_true' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Câu hỏi 2',
                'content' => '2 + 2 bằng mấy?',
                'option_a' => '3',
                'option_b' => '4',
                'option_c' => '5',
                'option_d' => '6',
                'is_true' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Câu hỏi 3',
                'content' => 'Màu của lá cây là gì?',
                'option_a' => 'Đỏ',
                'option_b' => 'Xanh lá',
                'option_c' => 'Vàng',
                'option_d' => 'Xám',
                'is_true' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
