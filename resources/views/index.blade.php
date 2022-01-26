<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container{
      background-color: #4169e1;
      width: 100%;
      height: 100vh;
      position: absolute;

    }
    .card{
      background-color: #1e90ff;
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 10px;
    }
    .book-app{
       margin: 0 auto 10px;
       width: 80%;
       background-color: #87cefa;
       padding: 10px;
    }
    .create-form{
      background-color: #87cefa;
      padding: 10px;
      width: 80%;
      margin: 10px auto;
    }
    table{
       margin: 10px auto;
       width: 80%;
       background-color: #87cefa;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="book-app">家計簿アプリ</p>
      @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
      @endif
      <div class="book">
        <form action="/todo/create" method="post" class="create-form">
          @csrf
          <span class="date-form">日付</span>
          <input type="date" name="date" class="date-input" /><br>
          <span class="content-form">品目</span>
          <input type="text" name="content" class="content-input" /><br>
          <span class="number-form">金額</span>
          <input type="text" name="number" class="number-input" /><br>
          <input type="submit" class="add-btn" value="追加" />
        </form>
        <form action="/todo/find" method="post" >
          @csrf
          <input type="date" name="date" class="date-index" />
          <input type="submit" value="検索" class="index" />
        </form>
        <table>
          <tr>
            <th>日付</th>
            <th>品目</th>
            <th>金額</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach ($items as $item)
          <tr>
            <form action="{{ route('todo.update', ['id' => $item->id]) }}" method="post" class="update-form">
              @csrf
              <td>
                <input type="date" name="date" class="date-input" value="{{ $item->date }}" />
              </td>
              <td>
                <input type="text" name="content" class="content-input" value="{{ $item->content }}" />
              </td>
              <td>
                <input type="text" name="number" class="number-input" value="{{ $item->number }}" />
              </td>
              <td>
                <button class="update-btn">更新</button>
              </td>
            </form>
            <td>
              <form action="{{ route('todo.delete', ['id' => $item->id]) }}" method="post" class="delete-form">
                @csrf
                <button class="delete-btn">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>
</html>