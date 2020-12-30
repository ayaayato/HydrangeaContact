<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
</head>
<body>

<div class="main">
@yield('content')
<br>
    <a href="https://hydrangea1008.herokuapp.com/" title="Hydrangeaへ戻る">
    <img src="{{ asset('image/b1.png') }}">
    </a>
</div>

</body>
</html>