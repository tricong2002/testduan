<div class="container mt-4">
    {{-- Thông báo điểm --}}
    @if (session('score'))
        <div class="alert alert-info">
            Điểm của bạn: <strong>{{ session('score') }}</strong>
        </div>
    @endif

    {{-- Tiêu đề câu hỏi --}}
    <h3>{{ $data->title }}</h3>

    {{-- Nội dung câu hỏi --}}
    <p>{{ $data->content }}</p>

    {{-- Form trả lời --}}
    <form action="{{ route('checkan', $data->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="a" value="1" required>
                <label class="form-check-label" for="a">
                    {{ $data->option_a }}
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="b" value="2">
                <label class="form-check-label" for="b">
                    {{ $data->option_b }}
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="c" value="3">
                <label class="form-check-label" for="c">
                    {{ $data->option_c }}
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="d" value="4">
                <label class="form-check-label" for="d">
                    {{ $data->option_d }}
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Trả lời</button>
    </form>
</div>
