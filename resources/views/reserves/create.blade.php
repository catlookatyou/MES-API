<!DOCTYPE html>
<html>
<body>

<h2>create reserve</h2>

<form action="{{ route('reserves.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <li>名稱</li>
    <input type="text" name="name" id="name">
    <li>種類</li>
    <select name="stuff_id" id="stuff_id">
        <option value="0">請選擇...</option>
            @foreach($stuffs as $stuff)
                <option value="{{ $stuff->id }}">
                    {{ $stuff->name}}
                </option>
            @endforeach
    </select>
    <li>數量</li>
    <input type="text" name="count" id="count">
    <li>單位</li>
    <input type="text" name="unit" id="unit">
    <button type="submit">儲存</button>
</form>
</body>
</html>
