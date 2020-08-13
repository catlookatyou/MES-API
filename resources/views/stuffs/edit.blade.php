<!DOCTYPE html>
<html>
<body>

<h2>edit stuff</h2>

<form action="{{ route('stuffs.update', ['id' => $stuff->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <li>名稱</li>
    <input type="text" name="name" id="name" value="{{ $stuff->name?? '' }}">
    <li>單價</li>
    <input type="text" name="unit_price" id="unit_price" value="{{ $stuff->unit_price?? '' }}">
    <li>單位</li>
    <input type="text" name="unit" id="unit" value="{{ $stuff->unit?? '' }}">
    <li>供應商</li>
    <input type="text" name="compony_id" id="compony_id" value="{{ $stuff->compony_id?? '' }}">
    <button type="submit">儲存</button>
</form>
</body>
</html>
