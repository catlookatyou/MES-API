<!DOCTYPE html>
<html>
<body>

<h2>create stuff</h2>

<form action="{{ route('stuffs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <li>名稱</li>
    <input type="text" name="name" id="name">
    <li>單價</li>
    <input type="text" name="unit_price" id="unit_price">
    <li>單位</li>
    <input type="text" name="unit" id="unit">
    <li>供應商</li>
    <input type="text" name="compony_id" id="compony_id">
    <button type="submit">儲存</button>
</form>
</body>
</html>
