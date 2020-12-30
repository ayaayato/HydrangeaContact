<div class="contact-form">
      <h1 class="form-title">お問い合わせ</h1>
      <br>

      <form method="post" action="">
      @csrf
        <div class="form-item">
        <h4>メールアドレス （必須）</h4>
        <input class="inputs" type="text" name="email">
        </div>
        <br>

        <div class="form-item">
        <h4>お問い合わせの種類 （必須）</h4>
        <?php 
          $types = array('Hydrangeaに関するお問い合わせ', 'ご意見、ご要望', 'エラー、バグの報告', '不適切な投稿の報告', '開発者へのご相談、ご依頼', 'その他');
         ?>

        <select class="inputs" name="category">
          <option value="未選択">選択してください</option>
          <?php
          foreach ($types as $type){
            echo "<option value='{$type}'>{$type}</option>";
          }
          ?>
        </select>
        </div>

        <br>
        <div class="form-item">
        <h4>内容 （必須）</h4>
        <textarea class="inputs" name="body"></textarea>
        </div>
        <br>
      <div>
        <input class="btn" type="submit" value="送信">
      </div>
      </form>
    </div>