@extends('layout.common')

@section('content')

<div class="contact-form">
      <h1 class="form-title">お問い合わせ</h1>
      <br>

      <form method="post" action="{{ route('contact.confirm') }}">
      @csrf
        <div class="form-item">
        <h4>メールアドレス</h4>
        <input class="inputs email-inp" type="text" name="email">
        </div>
        <br>

        <div class="form-item">
        <h4>お問い合わせの種類</h4>
        <?php 
          $types = array('Hydrangeaに関するお問い合わせ', 'ご意見・ご要望', 'エラー・バグの報告', '不適切な投稿の報告', '開発者へのご相談・ご依頼', 'その他');
         ?>

        <select class="inputs" name="category">
          <option value="">選択してください</option>
          <?php
          foreach ($types as $type){
            echo "<option value='{$type}'>{$type}</option>";
          }
          ?>
        </select>
        </div>

        <br>
        <div class="form-item">
        <h4>内容</h4>
        <textarea class="inputs" name="body"></textarea>
        </div>
        <h4 class="danger">入力内容は全て必須です</h4>
        <br>
      <div>
        <input class="btn" type="submit" value="送信">
      </div>
      </form>
    </div>

@endsection