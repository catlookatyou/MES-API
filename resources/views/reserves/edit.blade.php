<!DOCTYPE html>
<html>
<body>

<h2>edit reserve</h2>

<form action="{{ route('reserves.update', ['id' => $reserve->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <li>名稱</li>
    <input type="text" name="name" id="name" value="{{ $reserve->name?? '' }}">
    <li>種類</li>
    <select name="stuff_id" id="stuff_id">
        <option value="0">請選擇...</option>
            @foreach($stuffs as $stuff)
                <option value="{{ $stuff->id }}" 
                    {{ ($reserve->stuff_id == $stuff->id)?"selected":"" }}>
                    {{ $stuff->name }}
                </option>
            @endforeach
    </select>
    <li>數量</li>
    <input type="text" name="count" id="count" value="{{ $reserve->count?? '' }}">
    <li>單位</li>
    <input type="text" name="unit" id="unit" value="{{ $reserve->unit?? '' }}">
    <button type="submit">儲存</button>
</form>
</body>
</html>
