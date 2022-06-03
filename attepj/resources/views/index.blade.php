<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
</head>
<body>
  <nav class="header__nav">
            <ul class="header__nav-list">
                <li>
                    Atte
                </li>
                <li>
                    <a href="" class="header__nav-list-link">ホーム</a>
                </li>
                <li>
                    <a href="" class="header__nav-list-link">日付一覧</a>
                </li>
                <li>
                    <a href="" class="header__nav-list-link">ログアウト</a>
                </li>
            </ul>
        </nav>

  <p>さん、お疲れ様です！</p>
        <form action="/" method="POST">
        @csrf
        @method('POST')
        <button type="submit">勤務開始</button>
        </form>
        <form action="/" method="POST">
        @csrf
        @method('POST')
        <button type="submit">勤務終了</button>
        </form>
        <form action="/" method="POST">
        @csrf
        @method('POST')
        <button type="submit">休憩開始</button>
        </form>
        <form action="/" method="POST">
        @csrf
        @method('POST')
        <button type="submit">休憩終了</button>
        </form>

  <footer class="footer">
        <p>Atte,inc.</p>
    </footer>
</body>
</html>