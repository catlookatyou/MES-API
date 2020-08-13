<!DOCTYPE html>
<html>
<body>

<h3><a href="{{ route('reserves.index') }}">庫存<a></h2>
<h3><a href="{{ route('stuffs.index') }}">原物料<a></h2>
<h3><a href="{{ route('purchases.index') }}">庫存補貨<a></h2>
<hr>

<a href="{{ route('reserves.create') }}">新增<a>

<table  border="1" style="width:100%" >
  <tr>
    <th>編號</th>
    <th>名稱</th> 
    <th>種類</th>
    <th>數量</th>
    <th>單位</th>
    <th>編輯</th>
    <th>刪除</th>
  </tr>
  @foreach($reserves as $reserve)
  <tr>
    <td>{{$reserve->id}}</td>
    <td>{{$reserve->name}}</td>
    <td>{{$reserve->stuffname()}}</td>
    <td>{{$reserve->count}}</td>
    <td>{{$reserve->unit}}</td>
    <td><a href="{{ route('reserves.edit', ['id' => $reserve->id]) }}">編輯<a></td>
    <td><form action="{{ route('reserves.destroy', ['id' => $reserve->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <button type="submit">刪除</button></form>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>
