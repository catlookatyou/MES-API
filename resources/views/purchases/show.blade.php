<!DOCTYPE html>
<html>
<body>

<h2>show purchase</h2>

<li>採購單名稱</li>
{{$purchase_record->name}}
<li>訂購日期</li>
{{$purchase_record->purchase_date}}
<li>供應商</li>
公司
<hr>
@foreach($purchase_details as $purchase_detail)
    <li>物品名稱</li>
    {{$purchase_detail->reserve_name}}
    <li>數量</li>
    {{$purchase_detail->count}}
    <li>單位</li>
    {{$purchase_detail->unit}}
    <li>單價</li>
    {{$purchase_detail->price}}
    <li>規格</li>
    {{$purchase_detail->specification}}
    <hr>
@endforeach

</body>
</html>
