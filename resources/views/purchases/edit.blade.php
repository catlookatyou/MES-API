<!DOCTYPE html>
<html>
<body>

<h2>edit purchase</h2>

<form action="{{ route('purchases.update', ['id' => $purchase_record->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <li>採購單名稱</li>
    <input type="text" name="name" id="name" value="{{ $purchase_record->name?? '' }}">
    <li>訂購日期</li>
    <input type="text" name="purchase_date" id="purchase_date" value="{{ $purchase_record->purchase_date?? '' }}">
    <li>供應商</li>
    <input type="text" name="compony_id" id="compony_id" value="{{ $purchase_record->compony_id?? '' }}">
    <hr>
    @foreach($purchase_details as $purchase_detail)
        <li>物品名稱</li>
        <input type="text" name="reserve_name" id="reserve_name" value="{{ $purchase_detail->reserve_name?? '' }}">
        <li>數量</li>
        <input type="text" name="count" id="count" value="{{ $purchase_detail->count?? '' }}">
        <li>單位</li>
        <input type="text" name="unit" id="unit" value="{{ $purchase_detail->unit?? '' }}">
        <li>單價</li>
        <input type="text" name="price" id="price" value="{{ $purchase_detail->price?? '' }}">
        <li>規格</li>
        <input type="text" name="specification" id="specification" value="{{ $purchase_detail->specification?? '' }}">
        <hr>
    @endforeach
    <button type="submit">儲存</button>
</form>
</body>
</html>
