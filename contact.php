<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ - HOTEL IMPERIAL RESORT TOKYO</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <div id="wrapper">
    <?php include('header.php'); ?>
    <div class="flex">
      <main>
        <ul id="panlist">
          <li><a href="./">ホーム</a></li>
          <li>お問い合わせ</li>
        </ul>
        <article>
          <h1>お問い合わせ</h1>
          <p>会場やプランについてのお問い合わせは、下記フォームよりお気軽にお寄せください。</p>
          <aside>
            <ul>
              <li>必要事項を記入し、「確認する」をクリックしてください。</li>
              <li>ご登録いただいた個人情報は、お問い合わせ内容の確認以外には使用いたしません。</li>
            </ul>
          </aside>
          <!--ここにフォームを記述-->
          <form action="send.php" method="post">
            <dl>
              <div>
                <dt>お名前（必須）</dt>
                <dd><input type="text" name="namae" required></dd>
              </div>
              <div>
                <dt>メールアドレス（必須）</dt>
                <dd><input type="email" name="email" required></dd>
              </div>
              <div>
                <dt>お問い合わせ種類</dt>
                <dd>
                  <label>
                    <input type="radio" name="category" value="事前のご相談" checked>
                    事前のご相談
                  </label>
                  <label>
                    <input type="radio" name="category" value="その他">
                    その他
                  </label>
                </dd>
              </div>
              <div>
                <dt>内容</dt>
                <dd><textarea name="naiyo"></textarea></dd>
              </div>
            </dl>
            <p><button>送信</button></p>
          </form>
        </article>
      </main>
      <?php include('aside.php'); ?>
    </div>
    <?php include('footer.php'); ?>
  </div>
</body>
</html>
