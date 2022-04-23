<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録画面</title>
</head>
<body>
  <form action="/register" method="post">
  @csrf
  <tr>
    <th>名前</th>
    <th><input type="text" name="name"></th>
  </tr>
  <tr>
    <td>メールアドレス</td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>パスワード</td>
    <td><input type="password" name="password"></td>
  </tr>
  <tr>
    <td>パスワード（確認）</td>
    <td><input type="password" name="password_confirmation"></td>
  </tr>
  <input type="submit" class="form-btn" value="登録">
</form>
</body>
</html>