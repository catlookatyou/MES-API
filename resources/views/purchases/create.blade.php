<!DOCTYPE html>
<html>
<body>

<h2>create purchase</h2>

<form action="{{ route('purchases.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <li>採購單名稱</li>
    <input type="text" name="name" id="name">
    <li>訂購日期</li>
    <input type="text" name="purchase_date" id="purchase_date">
    <li>供應商</li>
    <input type="text" name="compony_id" id="compony_id">
    <hr>
    <li>物品名稱</li>
    <input type="text" name="reserve_name[]" id="reserve_name">
    <li>數量</li>
    <input type="text" name="count[]" id="count">
    <li>單位</li>
    <input type="text" name="unit[]" id="unit">
    <li>單價</li>
    <input type="text" name="price[]" id="price">
    <li>規格</li>
    <input type="text" name="specification[]" id="specification">
    <hr>
    <li>物品名稱</li>
    <input type="text" name="reserve_name[]" id="reserve_name">
    <li>數量</li>
    <input type="text" name="count[]" id="count">
    <li>單位</li>
    <input type="text" name="unit[]" id="unit">
    <li>單價</li>
    <input type="text" name="price[]" id="price">
    <li>規格</li>
    <input type="text" name="specification[]" id="specification">
    <button type="submit">儲存</button>
</form>
</body>
</html>
