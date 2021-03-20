<?php
$namae = $_POST['namae'];
$email = $_POST['email'];
$category = $_POST['category'];
$naiyo = $_POST['naiyo'];

//メール送信
$to = 'gogotothewest@gmail.com';
$from = 'info@designgakkou.jp';
$subject = 'お問い合わせがありました';
$body = <<<EOF
お問い合わせがありました。
ーーーーーーーーーーーーーーーーーーーーーーーーーーー
お名前：{$namae}
メールアドレス：{$email}
お問い合わせ種類：{$category}
内容：
{$naiyo}
ーーーーーーーーーーーーーーーーーーーーーーーーーーー
--
このメールは、xxx.comから自動で送信されています。
EOF;

mb_internal_encoding('UTF-8');
mb_send_mail($to, $subject, $body, "from:{$from}");

$to = $email;
mb_send_mail($to, $subject, $body, "from:{$from}");
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ送信完了 - HOTEL IMPERIAL RESORT TOKYO</title>
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
          <li><a href="contact.php">お問い合わせ</a></li>
          <li>お問い合わせ送信完了</li>
        </ul>
        <article>
          <h1>お問い合わせ送信完了</h1>
          <p><?php echo $namae; ?>様、<br>
            お問い合わせありがとうございます。ご入力いただいた内容は、正常に送信されました。</p>
          <p>担当者より別途メールを送信させていただきます。お問い合わせ内容により、回答にお時間をいただく場合がございますことをご了承ください。</p>
          <p>ご登録いただいたメールアドレスに、お問い合わせの確認メールを送信しております。ご確認ください。</p>
          <p><a href="./">TOPページに戻る</a></p>
        </article>
      </main>
      <?php include('aside.php'); ?>
    </div>
    <?php include('footer.php'); ?>
  </div>
</body>
</html>
