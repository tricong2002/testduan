<div class="">
    <table border="1">
        <tr>
            <td>cau</td>
            <td> cau hoi</td>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td> {{ $item->id }}</td>
                <td>
                    <div class=""><a href="details/{{ $item->id }}"> {{ $item->cauhoi }}</a></div>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="">
        <form action="/" method="POST">
            @csrf
            <input type="text" name="search" id="">
            <button type="submit"> tim kiem </button>
        </form>


    </div>
</div>
