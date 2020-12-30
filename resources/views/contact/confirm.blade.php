@extends('layout.common')

@section('content')
<form method="POST" action="{{ route('contact.sent') }}">
@csrf
    <h1>入力内容</h1>
    <br>
    <div>
    <h4>メールアドレス</h4>
    <div>
      {{ $inputs['email'] }}
    </div>
    <input
        name="email"
        value="{{ $inputs['email'] }}"
        type="hidden">
    </div>
    <br>
    <div>
    <h4>お問い合わせの種類</h4>
    <div>
    {{ $inputs['category'] }}
    </div>
    <input
        name="category"
        value="{{ $inputs['category'] }}"
        type="hidden">
    </div>
    <br>
    <div>
    <h4>内容</h4>
    <div class="text-body">
    {!! nl2br(e($inputs['body'])) !!}
    </div>
    <input
        name="body"
        value="{{ $inputs['body'] }}"
        type="hidden">
    </div>
    <br>

    <div>
    <button class="btn" type="button" onclick="history.back()">
        修正する
    </button>
    <button class="btn" type="submit" name="action" value="submit">
        送信する
    </button>
    </div>
</form>


@endsection
