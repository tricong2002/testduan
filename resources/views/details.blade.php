<div>
    <h1>
        @if (session('score'))
            <div class="alert alert-info">
                Điểm của bạn là: {{ session('score') }}
            </div>
        @endif
    </h1>
    <div class=""> <img src="" alt=""></div>
    <div class="">{{ $data->cauhoi }}</div>
</div>

<form action="{{ route('checkan', $data->id) }}" method="post">
    @csrf
    <button type="submit" name="answer" value="1">ssĐúng</button>
    <button type="submit" name="answer" value="2">Sai</button>
</form>
