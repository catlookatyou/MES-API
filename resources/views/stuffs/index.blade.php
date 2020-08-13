<!DOCTYPE html>
<html>
<body>

<h3><a href="{{ route('reserves.index') }}">庫存<a></h2>
<h3><a href="{{ route('stuffs.index') }}">原物料<a></h2>
<h3><a href="{{ route('purchases.index') }}">庫存補貨<a></h2>
<hr>

<a href="{{ route('stuffs.create') }}">新增<a>

<table border="1" style="width:100%">
  <tr>
    <th>編號</th>
    <th>名稱</th> 
    <th>單價</th>
    <th>單位</th>
    <th>供應商</th>
    <th>編輯</th>
    <th>刪除</th>
  </tr>
  @foreach($stuffs as $stuff)
  <tr>
    <td>{{$stuff->id}}</td>
    <td>{{$stuff->name}}</td>
    <td>{{$stuff->unit_price}}</td>
    <td>{{$stuff->unit}}</td>
    <td>公司</td>
    <td><a href="{{ route('stuffs.edit', ['id' => $stuff->id]) }}">編輯<a></td>
    <td><form action="{{ route('stuffs.destroy', ['id' => $stuff->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <button type="submit">刪除</button></form>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
