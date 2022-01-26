<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>検索</p>
  @if (@isset($book))
  <table>
    <tr>
      <th>日付</th>
      <th>品目</th>
      <th>金額</th>
    </tr>
    
    @foreach ($books as $book)
    <tr>
      <td>{{ $book->date }}</td>
      <td>{{ $book->content }}</td>
      <td>{{ $book->number }}</td>
    </tr>
    @endforeach
  </table>
  @endif
</body>
</html>
  