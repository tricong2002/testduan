<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class Questions extends Controller
{
    public function index(Request $request)
    {
        session([
            'cart' => [
                'product_1' => 2,
                'product_2' => 5
            ],
            'user_name' => 'Truong'
        ]);
        $data = Post::all(); // Lấy tất cả các bài viết
        return view('welcome', ['data' => $data]); // Truyền dữ liệu vào view 'welcome'
    }



    public function details($id)
    {

        $question = Post::find($id);
        return view('details', ['data' => $question]);
    }

    public function checkAnswer(Request $request, $id)
    {
        // Lấy điểm từ session
        $score = session('score', 0);

        // Tìm câu hỏi dựa trên ID
        $question = Post::find($id);

        // Kiểm tra câu trả lời
        if ($question->is_true == (int) $request->answer) {
            // Nếu đúng, cộng 10 điểm và chuyển sang câu tiếp theo
            $score += 10;
            $nextId = $id + 1; // Giả sử các câu hỏi có ID liên tiếp
            session(['score' => $score]);

            // Kiểm tra nếu câu hỏi tiếp theo có tồn tại
            $nextQuestion = Post::find($nextId);
            if ($nextQuestion) {
                return redirect()->route('question.details', ['id' => $nextId]); // Chuyển đến câu tiếp theo
            } else {
                // Nếu không còn câu hỏi nữa, bạn có thể dừng quiz ở đây hoặc làm gì đó khác
                return redirect()->route('question.details', ['id' => $id]); // Hoặc quay lại câu hiện tại
            }
        } else {
            // Nếu sai, trừ 5 điểm và quay lại câu hỏi trước đó
            $score -= 5;
            session(['score' => $score]);

            // Giả sử câu hỏi trước có ID là $id - 1
            $prevId = $id - 1;

            // Kiểm tra nếu câu hỏi trước đó có tồn tại
            $prevQuestion = Post::find($prevId);
            if ($prevQuestion) {
                return redirect()->route('question.details', ['id' => $prevId]); // Quay lại câu trước
            } else {
                // Nếu không có câu hỏi trước, có thể hiển thị thông báo hoặc làm gì đó khác
                return redirect()->route('question.details', ['id' => $id]); // Hoặc quay lại câu hiện tại
            }
        }
    }
}
