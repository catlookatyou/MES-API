<!DOCTYPE html>
<html>
<body>

<h3><a href="{{ route('reserves.index') }}">庫存<a></h2>
<h3><a href="{{ route('stuffs.index') }}">原物料<a></h2>
<h3><a href="{{ route('purchases.index') }}">庫存補貨<a></h2>
<hr>

<a href="{{ route('purchases.create') }}">新增<a>

<table border="1" style="width:100%">
  <tr>
    <th>編號</th>
    <th>名稱</th> 
    <th>供應商</th>
    <th>訂購日期</th>
    <th>詳細資訊</th>
    <th>產生單據</th>
    <th>編輯</th>
    <th>刪除</th>
  </tr>
  @foreach($purchase_records as $purchase_record)
  <tr>
    <td>{{$purchase_record->id}}</td>
    <td>{{$purchase_record->name}}</td>
    <td>公司</td>
    <td>{{$purchase_record->purchase_date}}</td>
    <td><a href="{{ route('purchases.show', ['id' => $purchase_record->id]) }}">詳細</a></td>
    <td><a href="#">單據</a></td>
    <td><a href="{{ route('purchases.edit', ['id' => $purchase_record->id]) }}">編輯<a></td>
    <td><form action="{{ route('purchases.destroy', ['id' => $purchase_record->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <button type="submit">刪除</button></form>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
