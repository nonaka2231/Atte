

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=“stylesheet” href="{{ asset('css/reset.css') }}" type="text/css"> 
    <link rel=“stylesheet” href="{{ asset('css/works.css') }}" type="text/css"> 
</head>
<body>
    <header>
    <h1>Atte</h1>
    <nav>
        <ul>
            <li><a href="">ホーム</a></li>
            <li><a href="/list_data">日付一覧</a></li>
            <li><a href="">ログアウト</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <p>さんお疲れ様です！</p>

    </main>
    <footer>
        <small>Atte,inc.</small>
    </footer>
</body>
</html>
<div class="button-form">
    <ul>
        <li>
            <form action="{{ route('work_start') }}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-primary">勤務開始</button>
            </form>
        </li>
        <li>
            <form action="{{ route('work_end') }}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-success">勤務終了</button>
            </form>
        </li>
        <li>
            <form action="{{ route('rest_start') }}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-success">休憩開始</button>
            </form>
        </li>
        <li>
            <form action="{{ route('rest_end') }}" method="POST">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-success">休憩終了</button>
            </form>
        </li>
    </ul>

